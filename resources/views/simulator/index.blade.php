@extends('layout.default')

@section('content')
    <div class="col-12">
        <form method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12">
                    <label for="car">Selecione o veículo<small class="text-danger">*</small></label>
                    <select onchange="onChangeCar()" id="car" name="car" class="form-select valid">
                        <option value="" disabled="" selected="">Selecione um veículo</option>
                        @foreach ($cars as $car)
                            <option {{ old('car') == $car->id ? 'selected' : ((isset($data->car) and $data->car == $car->id ) ? 'selected':'') }} value="{{ $car->id }}">
                                {{ $car->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <span class="car-details hidden">
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-8 col-sm-12">
                        <label>Detalhes do veículo:</label>
                        <table class="table table-condensed">
                            <tr>
                                <td class='font-weight-bold'>Nome:</td>
                                <td id='car-name'></td>
                            </tr>
                            <tr>
                                <td class='font-weight-bold'>Marca:</td>
                                <td id='car-brand'></td>
                            </tr>
                            <tr>
                                <td>Valor:</td>
                                <td colspan=3 id='car-value'></td>
                            </tr>
                            <tr>
                                <td>Descrição:</td>
                                <td colspan=3 id='car-description'></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row justify-content-center align-items-end">
                    <div class="col-md-5 col-sm-12">
                        <label for="entry_value">Informe o valor de entrada:</label>
                        <input type="text" id="entry_value" name="entry_value" value="{{isset($data)?$data->entry_value:''}}" class="form-control" />
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <button type="submit" style="margin-bottom:0px;width:100%;"
                            class="button button-rounded button-reveal button-small button-teal"><i
                                class="icon-dollar"></i><span>Simular</span></a>
                    </div>
                </div>
                @if (isset($html))
                <div class="row justify-content-center align-items-end mt-3 result">
                    <div class="col-md-8 col-sm-12 alert alert-info">
                        <label>Valores simulados para você:</label>
                        <br>
                        {!! $html !!}
                    </div>
                </div>
                @endif
            </span>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        //função que busca e exibe informações adicionais do carro
        function onChangeCar() {
            let carId = $('#car').val();
            if (carId) {
                $('.car-details').show();
                let url = 'api/cars/' + carId

                // Busca dados do carro na api e popula a tabela do mesmo
                fetch(url).then(response => {
                        return response.json();
                    })
                    .then(data => {
                        let car = data.data;
                        let value = car.value;
                        let formatedValue = value.toLocaleString('pt-br', {
                            style: 'currency',
                            currency: 'BRL'
                        });
                        $('#car-name').html(car.name);
                        $('#car-description').html(car.description);
                        $('#car-value').html(formatedValue);
                        $('#car-brand').html(car.brand.name);
                    })
            }else{
                $('.car-details').hide();
            }
        }

        $(document).ready(function() {
            onChangeCar(); // Chama a função de buscar detalhes do carro
            $('#car').select2(); // Ativa o select 2 no campo de carro
            $("#entry_value").maskMoney({ // Ativa mascara de dinheiro
                decimal: ",",
                thousands: "."
            });
        });
    </script>
@endsection
