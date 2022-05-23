@extends('admin.layout.table_form')

@section('table')
    <div class="panel-main-table">
        <div class="panel-registers">
            <div class="register">
                <ul>
                    <li><span>Nombre: </span>faq 1</li>
                    <li><span>Categoría: </span>general</li>
                    <li><span>Creado el: </span>20-04-2022</li>
                </ul>
            </div>
            <div class="register">
                <ul>
                    <li><span>Nombre: </span>faq 1</li>
                    <li><span>Categoría: </span>general</li>
                    <li><span>Creado el: </span>20-04-2022</li>
                </ul>
            </div>
            <div class="register">
                <ul>
                    <li><span>Nombre: </span>faq 1</li>
                    <li><span>Categoría: </span>general</li>
                    <li><span>Creado el: </span>20-04-2022</li>
                </ul>
            </div>
        </div>
        {{-- <table>
            <tr>
                <td>Id</td>
                <td>Usuario</td>
                <td>Contraseña</td>
                <td>E-Mail</td>
                <td>Nombre</td>
                <td>Opciones</td>
            </tr>
            <tr>
                <td>1</td>
                <td>GatoMao</td>
                <td>1234</td>
                <td>gonzalo-luminoso@gmail.com</td>
                <td>Gonzalo</td>
                <td>
                    <div class="edit-img">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                        </svg>
                    </div>
                    <div class="rubish-img">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
                        </svg>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>GatoMao</td>
                <td>1234</td>
                <td>gonzalo-luminoso@gmail.com</td>
                <td>Gonzalo</td>
                <td>
                    <div class="edit-img">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                        </svg>
                    </div>
                    <div class="rubish-img">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
                        </svg>
                    </div>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>GatoMao</td>
                <td>1234</td>
                <td>gonzalo-luminoso@gmail.com</td>
                <td>Gonzalo</td>
                <td>
                    <div class="edit-img">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                        </svg>
                    </div>
                    <div class="rubish-img">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                        </svg>
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
                        </svg>
                    </div>
                </td>
            </tr>
        </table> --}}
    </div>
@endsection

@section('form')
    <div class="panel-main">
        <div class="panel-main-options">
            <div class="filter-options">
                <div class="filter-img">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M14.76,20.83L17.6,18L14.76,15.17L16.17,13.76L19,16.57L21.83,13.76L23.24,15.17L20.43,18L23.24,20.83L21.83,22.24L19,19.4L16.17,22.24L14.76,20.83M12,12V19.88C12.04,20.18 11.94,20.5 11.71,20.71C11.32,21.1 10.69,21.1 10.3,20.71L8.29,18.7C8.06,18.47 7.96,18.16 8,17.87V12H7.97L2.21,4.62C1.87,4.19 1.95,3.56 2.38,3.22C2.57,3.08 2.78,3 3,3V3H17V3C17.22,3 17.43,3.08 17.62,3.22C18.05,3.56 18.13,4.19 17.79,4.62L12.03,12H12Z" />
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
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                </svg>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                                </svg>
                            </li>
                            <li>
                                <label class="switch3 switch3-checked">
                                    <input type="checkbox" checked/>
                                    <div></div>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form action="">
            <div class="panel-main-form">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="form-element">
                            <label for="">Categoria</label>
                            <select name="category" id="">
                                <option value="">0</option>
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-element">
                            <label for="">Nombre</label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="desktop-one-column">
                    <div class="column">
                        <div class="form-element">
                            <label for="">Título</label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="desktop-one-column">
                    <div class="column">
                        <div class="form-element">
                            <label for="">Descripción</label>
                            <textarea name="" class="editor" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection