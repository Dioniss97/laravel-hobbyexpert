@section('form')
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
                <button>Español</button>
            </div>
            <div class="form-title">
                <label for="">Título</label>
                <input type="text">
            </div>
            <div class="form-description">
                <label for="">Descripción</label>
                <textarea name="" class="editor" cols="30" rows="10"></textarea>
            </div>
        </form>
    </div>
@endsection

@section('table')
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
@endsection