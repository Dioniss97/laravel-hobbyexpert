@extends('admin.layout.table_form')

@section('table')
    <div class="panel-main-table">
        <div class="register">
            @if(isset($sells))
                @foreach ($sells as $sell)
                    <div class="desktop-two-columns-aside">
                        <div class="column-main">
                            <div class="register-items">
                                <div class="register-item"></div><span>Id: </span>{{$sell->id}}</li>
                                <div class="register-item"></div><span>Ticket: </span>{{$sell->ticket_number}}</li>
                                <div class="register-item"></div><span>Actualizado el: </span>{{$sell->updated_at}}</li>
                            </div>
                        </div>
                        <div class="column-aside">
                            <div class="register-tools">
                                <div class="register-tool edit-button" data-url="{{route('sells_edit', ['sell' => $sell->id])}}">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                    </svg>
                                </div>
                                <div class="register-tool delete-button" data-url="{{route('sells_destroy', ['sell' => $sell->id])}}">
                                    <svg viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@section('form')
    @if(isset($sell))
        <form class="admin-form">
            <input type="hidden" name="id">
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
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Nombre cliente</label>
                                <input type="text" name="name" value="{{isset($sell->name) ? $sell->name : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Apellidos</label>
                                <input type="text" name="surnames" value="{{isset($sell->surnames) ? $sell->surnames : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{isset($sell->email) ? $sell->email : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Teléfono</label>
                                <input type="tel" name="password" value="{{isset($sell->password) ? $sell->password : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Dirección</label>
                                <input type="text" name="address" value="{{isset($sell->address) ? $sell->address : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Código Postal</label>
                                <input type="number" name="postal_code" value="{{isset($sell->postal_code) ? $sell->postal_code : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Ventas realizadas</label>
                                <input type="number" name="postal_code" value="{{isset($sell->postal_code) ? $sell->postal_code : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Volumen de sus ventas</label>
                                <input type="number" name="postal_code" value="{{isset($sell->postal_code) ? $sell->postal_code : ""}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif    
@endsection