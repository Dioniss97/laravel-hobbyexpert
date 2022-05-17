<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('front.layout.partials.styles')
    <title>Hobby Expert</title>
</head>

<body>
    @include('front.layout.partials.header')
    <main>
        <div class="panel">
            <div class="panel-header">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="panel-header-title">
                            <h2>FAQ's</h2>
                        </div>
                    </div>
                    <div class="column">
                        <div class="panel-header-hamburger">
                            <div class="faq hamburger" id="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desktop-two-columns-aside">
                <div class="column-aside">
                    <div class="panel-aside">
                        <ul>
                            <li><span>Nombre: </span>faq 1</li>
                            <li><span>Categoría: </span>general</li>
                            <li><span>Creado el: </span>20-04-2022</li>
                        </ul>
                    </div>
                </div>
                <div class="column-main">
                    <div class="panel-main">
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="box-options">
                                    <ul>
                                        <li>Contenido</li>
                                        <li>Imágenes</li>
                                        <li>Seo</li>
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
                                                <input type="checkbox" checked />
                                                <div></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel-main-form">
                            <form action="">
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-category">
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
                                        <div class="form-name">
                                            <label for="">Nombre</label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-language">
                                    <span>Español</span>
                                </div>
                                <div class="form-title"></div>
                                <div class="form-description">
                                    <label for="">Descripción</label>
                                    <textarea name="" class="editor" cols="30" rows="10"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('front.layout.partials.footer')
    @include('front.layout.partials.js')
</body>

</html>