@extends('admin.layout.table_form')

@section('table')
    <div class="panel-main-table">
        <div class="register">
            @if(isset($products))
                @foreach ($products as $product_element)
                    <div class="desktop-two-columns-aside">
                        <div class="column-main">
                            <div class="register-items">
                                <div class="register-item"></div><span>Id: </span>{{$product_element->id}}</li>
                                <div class="register-item"></div><span>Título: </span>{{$product_element->title}}</li>
                                <div class="register-item"></div><span>Actualizado el: </span>{{$product_element->updated_at}}</li>
                            </div>
                        </div>
                        <div class="column-aside">
                            <div class="register-tools">
                                <div class="register-tool edit-button" data-url="{{route('products_edit', ['product' => $product_element->id])}}">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                                    </svg>
                                </div>
                                <div class="register-tool delete-button" data-url="{{route('products_destroy', ['product' => $product_element->id])}}">
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
    @if(isset($product))
        <form class="admin-form" action="{{route("products_store")}}">
            <input type="hidden" name="id" value="{{isset($product->id) ? $product->id : ""}}">
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
                                        <div class="tool store-button" data-url="{{route('products_store')}}">
                                            <svg viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tool create-button" data-url="{{route('products_create')}}">
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
                    <div class="desktop-one-columns">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Título</label>
                                <input type="text" name="title" value="{{isset($product->title) ? $product->title : ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-columns">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Categoría</label>
                                <select type="text" name="category_id" >
                                    <option value="">Seleccione una categoría</option>
                                        @foreach($product_categories as $product_category)
                                            <option value="{{$product_category->id}}" {{isset($product_category->id) && $product->category_id == $product_category->id ? "selected" : ""}}>{{$product_category->title}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-two-columns">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Precio</label>
                                <input type="number" name="base_price" value="{{isset($product->prices->first()->base_price) ? $product->prices->first()->base_price : ""}}">
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element">
                                <label for="tax">Impuesto</label>
                                <select name="tax_id" id="tax">
                                    <option value="">Seleccione un impuesto</option>
                                    @if(isset($taxes))
                                        @foreach($taxes as $tax)
                                            <option value="{{$tax->id}}" {{isset($product->prices->first()->tax_id) && $product->prices->first()->tax_id == $tax->id ? "selected" : ""}}>{{$tax->type}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-columns">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Descripción</label>
                                <textarea name="description" class="ckeditor" cols="30" rows="10">{{isset($product->description) ? $product->description : ""}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-one-columns">
                        <div class="column">
                            <div class="form-element">
                                <label for="">Especificaciones</label>
                                <textarea name="specs" class="ckeditor" cols="30" rows="10">{{isset($product->specs) ? $product->specs : ""}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif    
@endsection