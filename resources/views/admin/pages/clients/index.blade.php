@extends('admin.layout.table_form')

@section('table')
    <div class="panel-main-table">
        <div class="register">
            @if(isset($clients))
                @foreach ($clients as $client_element)
                    <div class="desktop-two-columns-aside">
                        <div class="column-main">
                            <div class="register-items">
                                <div class="register-item"></div><span>Id: </span>{{$client_element->id}}</li>
                                <div class="register-item"></div><span>Nombre: </span>{{$client_element->name}}</li>
                                <div class="register-item"></div><span>Actualizado el: </span>{{$client_element->updated_at}}</li>
                            </div>
                        </div>
                        <div class="column-aside">
                            <div class="register-tools">
                                <div class="register-tool edit-button" data-url="{{route('clients_edit', ['user' => $client_element->id])}}">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                    </svg>
                                </div>
                                <div class="register-tool delete-button" data-url="{{route('clients_destroy', ['user' => $client_element->id])}}">
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
    @if(isset($client))
        <form class="admin-form" action="{{route("clients_store")}}">
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
                                        <div class="tool store-button" data-url="{{route('clients_store')}}">
                                            <svg viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tool create-button" data-url="{{route('clients_create')}}">
                                            <svg viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tool">
                                            <label class="switch3 switch3-checked">
                                                <input type="checkbox" checked />
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
                                <label for="">Nombre</label>
                                <input type="text" name="name" value="{{isset($client->name) ? $client->name : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Apellidos</label>
                                <input type="text" name="surnames" value="{{isset($client->surnames) ? $client->surnames : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{isset($client->email) ? $client->email : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Teléfono</label>
                                <input type="tel" name="password" value="{{isset($client->password) ? $client->password : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Dirección</label>
                                <input type="text" name="address" value="{{isset($client->address) ? $client->address : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Código Postal</label>
                                <input type="number" name="postal_code" value="{{isset($client->postal_code) ? $client->postal_code : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="form-element">
                                <label for="province">Provincia</label>
                                <select name="province">
                                <option value='selecciona'>Selecciona</option>
                                <option value='A Coruña'>A Coruña</option>
                                <option value='Álava'>Álava</option>
                                <option value='Albacete'>Albacete</option>
                                <option value='Alicante'>Alicante</option>
                                <option value='Almería'>Almería</option>
                                <option value='Asturias'>Asturias</option>
                                <option value='ávila'>Ávila</option>
                                <option value='Badajoz'>Badajoz</option>
                                <option value='Barcelona'>Barcelona</option>
                                <option value='Burgos'>Burgos</option>
                                <option value='Cáceres'>Cáceres</option>
                                <option value='Cádiz'>Cádiz</option>
                                <option value='Cantabria'>Cantabria</option>
                                <option value='Castellón'>Castellón</option>
                                <option value='Ceuta'>Ceuta</option>
                                <option value='Ciudad Real'>Ciudad Real</option>
                                <option value='Córdoba'>Córdoba</option>
                                <option value='Cuenca'>Cuenca</option>
                                <option value='Gerona'>Gerona</option>
                                <option value='Girona'>Girona</option>
                                <option value='Las Palmas'>Las Palmas</option>
                                <option value='Granada'>Granada</option>
                                <option value='Guadalajara'>Guadalajara</option>
                                <option value='Guipúzcoa'>Guipúzcoa</option>
                                <option value='Huelva'>Huelva</option>
                                <option value='Huesca'>Huesca</option>
                                <option value='Jaén'>Jaén</option>
                                <option value='La Rioja'>La Rioja</option>
                                <option value='León'>León</option>
                                <option value='Lleida'>Lleida</option>
                                <option value='Lugo'>Lugo</option>
                                <option value='Madrid'>Madrid</option>
                                <option value='Malaga'>Málaga</option>
                                <option value='Mallorca'>Mallorca</option>
                                <option value='Melilla'>Melilla</option>
                                <option value='Murcia'>Murcia</option>
                                <option value='Navarra'>Navarra</option>
                                <option value='Orense'>Orense</option>
                                <option value='Palencia'>Palencia</option>
                                <option value='Pontevedra'>Pontevedra</option>
                                <option value='Salamanca'>Salamanca</option>
                                <option value='Segovia'>Segovia</option>
                                <option value='Sevilla'>Sevilla</option>
                                <option value='Soria'>Soria</option>
                                <option value='Tarragona'>Tarragona</option>
                                <option value='Tenerife'>Tenerife</option>
                                <option value='Teruel'>Teruel</option>
                                <option value='Toledo'>Toledo</option>
                                <option value='Valencia'>Valencia</option>
                                <option value='Valladolid'>Valladolid</option>
                                <option value='Vizcaya'>Vizcaya</option>
                                <option value='Zamora'>Zamora</option>
                                <option value='Zaragoza'>Zaragoza</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif    
@endsection