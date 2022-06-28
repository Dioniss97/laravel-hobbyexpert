@extends('admin.layout.table_form')

@section('table')
    <div class="panel-main-table">
        <div class="registers">
            @if(isset($sells))
                @foreach ($sells as $sell_element)
                    <div class="desktop-two-columns-aside">
                        <div class="column-main">
                            <div class="register-items">
                                <div class="register-item"><span>Id: </span>{{$sell_element->id}}</div>
                                <div class="register-item"><span>Ticket: </span>{{$sell_element->ticket_number}}</div>
                                <div class="register-item"><span>Actualizado el: </span>{{$sell_element->updated_at}}</div>
                            </div>
                        </div>
                        <div class="column-aside">
                            <div class="register-tools">
                                <div class="register-tool edit-button" data-url="{{route('sells_edit', ['sell' => $sell_element->id])}}">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M18 2H12V9L9.5 7.5L7 9V2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V4C20 2.89 19.1 2 18 2M17.68 18.41C17.57 18.5 16.47 19.25 16.05 19.5C15.63 19.79 14 20.72 14.26 18.92C14.89 15.28 16.11 13.12 14.65 14.06C14.27 14.29 14.05 14.43 13.91 14.5C13.78 14.61 13.79 14.6 13.68 14.41S13.53 14.23 13.67 14.13C13.67 14.13 15.9 12.34 16.72 12.28C17.5 12.21 17.31 13.17 17.24 13.61C16.78 15.46 15.94 18.15 16.07 18.54C16.18 18.93 17 18.31 17.44 18C17.44 18 17.5 17.93 17.61 18.05C17.72 18.22 17.83 18.3 17.68 18.41M16.97 11.06C16.4 11.06 15.94 10.6 15.94 10.03C15.94 9.46 16.4 9 16.97 9C17.54 9 18 9.46 18 10.03C18 10.6 17.54 11.06 16.97 11.06Z" />
                                    </svg>
                                </div>
                                <div class="register-tool delete-button" data-url="{{route('sells_destroy', ['sell' => $sell_element->id])}}">
                                    <svg viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="counter">
                <div class="counter-text">Ventas totales: <span>{{$counter}}</span></div>
            </div>
        </div>
    </div>
@endsection

@section('form')
    @if(isset($sell))
        <form class="admin-form">
            <div class="panel-main">
                <div class="panel-main-options">
                    <div class="filter-options">
                        <div class="filter-img">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M14.76,20.83L17.6,18L14.76,15.17L16.17,13.76L19,16.57L21.83,13.76L23.24,15.17L20.43,18L23.24,20.83L21.83,22.24L19,19.4L16.17,22.24L14.76,20.83M12,12V19.88C12.04,20.18 11.94,20.5 11.71,20.71C11.32,21.1 10.69,21.1 10.3,20.71L8.29,18.7C8.06,18.47 7.96,18.16 8,17.87V12H7.97L2.21,4.62C1.87,4.19 1.95,3.56 2.38,3.22C2.57,3.08 2.78,3 3,3V3H17V3C17.22,3 17.43,3.08 17.62,3.22C18.05,3.56 18.13,4.19 17.79,4.62L12.03,12H12Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="box-options">
                                <ul>
                                    <li class="tab">Contenido</li>
                                    <li class="tab">Imágenes</li>
                                    <li class="tab">Seo</li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="tool-options">
                                <ul>
                                    <li>
                                        <div class="tool store-button">
                                            <svg viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tool create-button">
                                            <svg viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tool">
                                            <label class="switch3 switch3-checked">
                                                <input type="checkbox" checked/>
                                                <div></div>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-main-form">
                    <div class="sell-panel">
                        <h3>Datos de la venta seleccionada</h3>
                        <div class="desktop-two-columns">
                            <div class="column">
                                {{-- Disabled inputs for the fields of sells table --}}
                                <div class="form-element">
                                    {{-- id field --}}
                                    <label for="id">ID</label>
                                    <input type="text" name="id" id="id" value="{{isset($sell->id) ? $sell->id : ""}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- ticket field --}}
                                    <label for="ticket">Ticket</label>
                                    <input type="text" name="ticket" id="ticket" value="{{isset($sell->ticket_number) ? $sell->ticket_number : ""}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- date_emission --}}
                                    <label for="date_emission">Fecha de emisión</label>
                                    <input type="text" name="date_emission" id="date_emission" value="{{$sell->date_emission}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- time_emission --}}
                                    <label for="time_emission">Hora de emisión</label>
                                    <input type="text" name="time_emission" id="time_emission" value="{{$sell->time_emission}}" disabled>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    {{-- payment_method --}}
                                    <label for="payment_method">Método de pago</label>
                                    <input type="text" name="payment_method" id="payment_method" value="{{isset($sell->payment->title) ? $sell->payment->title : ""}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- total_base_price --}}
                                    <label for="total_base_price">Ingreso base</label>
                                    <input type="text" name="total_base_price" id="total_base_price" value="{{$sell->total_base_price}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- total_tax_price --}}
                                    <label for="total_tax_price">Impuesto a pagar</label>
                                    <input type="text" name="total_tax_price" id="total_tax_price" value="{{$sell->total_tax_price}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- total_price --}}
                                    <label for="total_price">Ingreso total</label>
                                    <input type="text" name="total_price" id="total_price" value="{{$sell->total_price}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="client-panel">
                        <h3>Datos del cliente</h3>
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="form-element">
                                    {{-- client_name --}}
                                    <label for="client_name">Nombre del cliente</label>
                                    <input type="text" name="client_name" id="client_name" value="{{$sell->client->name}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- surnames --}}
                                    <label for="surnames">Apellidos</label>
                                    <input type="text" name="surnames" id="surnames" value="{{$sell->client->surnames}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- email --}}
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="{{$sell->client->email}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- telephone --}}
                                    <label for="telephone">Teléfono</label>
                                    <input type="text" name="telephone" id="telephone" value="{{$sell->client->telephone}}" disabled>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    {{-- country --}}
                                    <label for="country">País</label>
                                    <input type="text" name="country" id="country" value="{{$sell->client->country}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- province --}}
                                    <label for="province">Provincia</label>
                                    <input type="text" name="province" id="province" value="{{$sell->client->province}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- address --}}
                                    <label for="address">Dirección</label>
                                    <input type="text" name="address" id="address" value="{{$sell->client->address}}" disabled>
                                </div>
                                <div class="form-element">
                                    {{-- postal_code --}}
                                    <label for="postal_code">Código postal</label>
                                    <input type="text" name="postal_code" id="postal_code" value="{{$sell->client->postal_code}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="products-panel">
                        <table>
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sells as $sell_element)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>   
    @else
        <div class="advice-container">
            <div class="advice-text"><span>Selecciona el botón de "info"</span> de alguna venta para ver su ficha</div>
        </div>
    @endif
@endsection