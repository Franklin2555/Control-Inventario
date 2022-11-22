<meta charset="utf-8">
<style>
    */¨ {
        padding: 0;
        margin: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        border-width: 0;
        font-size: 18px;
        background-color: #ddd;
        font-family: "Montserrat", sans-serif;
        text-align: left;
    }

    .tm {
        width: 2%;
    }

    td {
        text-align: left;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        font-family: "Montserrat", sans-serif;
        font-weight: normal;
    }

    h2 {
        text-align: center;
        font-family: "Montserrat", sans-serif;
        font-size: 25px;
        color: #6C3B2A
    }

    p {
        text-align: center;
        font-family: "Montserrat", sans-serif;
        font-size: 20px;
        margin-bottom: 30px;
    }

    hr#linea {
        width: 75%;
        margin-bottom: 1rem;
        border: 0;
        border-top: 2px solid #2B2B2C;
    }

    h4 {
        margin-bottom: 1rem;
        text-align: right;
        font-weight: normal;
    }

    .v-line {
        border-left: 2px solid #6C3B2A;
        height: 100%;
        padding: 1px
    }

    .v-line-end {
        border-right: 2px solid #6C3B2A;
        height: 100%;
    }

    .v-line-rigth {
        border-top: 2px solid #6C3B2A;
        height: 100%;
        left: 100%;
        padding: 1px
    }

    .v-line-button {
        border-bottom: 2px solid #6C3B2A;
        height: 100%;
        left: 100%
    }

    .content {
        padding: 20px;
    }

    .ribbon {
        margin-top: 15px;
        width: 0px;
        height: 70px;
        border-left: 30px solid #6C3B2A;
        border-right: 30px solid #6C3B2A;
        border-bottom: 10px solid transparent;
        position: fixed;
    }

</style>
@php
date_default_timezone_set('America/El_Salvador');
@endphp
<div class="v-line">
    <div class="v-line-rigth">
        <div class="v-line-end">
            <div class="v-line-button">
                <div class="v-line">
                    <div class="v-line-rigth">
                        <div class="v-line-end">
                            <div class="v-line-button">
                                <div class="content">
                                    <div class="ribbon"></div>
                                    <hr id="linea">
                                    <h2> Reporte de Inventario</h2>
                                    <hr id="linea">
                                    <p>Restaurante "Noches de El Salvador"</p>
                                    <h4>San Salvador / @php echo date('d-m-Y'); @endphp
                                        <h4 />
                                        <table class="table">
                                            <thead class="thead">
                                                <tr>
                                                    <th>Inventario</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio</th>
                                                    <th>Unidades</th>
                                                    <th>Costo</th>

                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($inventarios as $inventario)
                                                <tr>
                                                    <td>{{ $inventario->producto }}</td>
                                                    <td>{{ $inventario->cantidad }}</td>
                                                    <td>${{ $inventario->precio }} USD</td>
                                                    <td>{{ $inventario->unidades }}</td>
                                                    <td>${{ $inventario->costo }} USD</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
