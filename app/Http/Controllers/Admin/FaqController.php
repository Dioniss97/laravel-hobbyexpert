<?php

// El nombre de la carpeta donde está el controlador
namespace App\Http\Controllers\Admin; 

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Http\Requests\Admin\FaqRequest;
use Debugbar;

// Podemos identificar que estamos ante un objeto por la palabra "class"
// el nombre objeto es "FaqController", el nombre del objeto tiene que
// coincidir con el nombre del archivo.

// extends lo que está afirmando es que el objeto "FaqController" está
// heredando todas las propiedades (variables) y métodos del objeto "Controller"
class FaqController extends Controller
{
    // Un objeto puede tener propiedades o/y métodos. 

    // La siguientde es una propiedad del objeto, una propiedad es equivalente
    // a una variable. En este caso estamos declarando la propiedad $faq la cual
    // podrá ser usada si escribimos $this->faq, donde "this" significa el propio
    // objeto. Protected en este caso significa que esta propiedad sólo puede ser 
    // usada desde dentro de una función. 

    protected $faq;

    /*
    Las siguientes líneas son métodos. Un método se identifica porque
    escribimos "public function". Public en este caso significa que esta función
    puede ser llamada por otro archivo para que se ejecute el código que hay dentro de 
    la función. 
    Cuando llamamos a un método antes de nada se ejecutara el método 
    __construct (constructor). El constructor se utiliza normalmente para
    dar un valor a las propiedades. 
    En este caso estamos construyendo el objeto del modelo Faq y asignándolo
    a la propiedad $this->faq para poder tener disponible el modelo dentro de
    cada método. Existen tres formas de construir (instanciar) un objeto, instanciar un objeto
    significa que hacemos disponible su código para poder ser usado. 
    1ª Forma (clásica):
    $faq = new Faq; 
    En esta forma estamos creando una variable que se llama faq, y que tiene como valor el objeto Faq. Si vemos
    la palabra "new" significa que se está instanciando el objeto. 
    2ª Forma (inyección de dependencias, la más óptima):
    __construct(Faq $faq)
    En esta forma lo que hacemos es poner entre los paréntesis de un método (en este ejemplo en el método __construct) el nombre
    del objeto y una variable que tendrá como valor el objeto ya instanciado. El nombre de la variable puede ser el que queramos, 
    pero normalmente solemos poner como nombre de la variable el mismo nombre del objeto. 
    3ª Forma (uso de métodos estáticos, la menos óptima)
    View::make('admin.pages.faqs.index')
    En esta forma lo que hacemos es usar un método de un objeto sin necesidad de instanciarlo. En este caso estamos usando el método
    make del objeto View. 
    Finalmente, una vez instanciado un objeto (por ejemplo, el objeto Faq) podemos acceder a sus propiedades escribiendo:
    $faq = new Faq;
    $faq->name;
    En este caso estamos accediendo a la propiedad "name" del objeto "faq";
    Si queremos acceder al método de un objeto tenemos que escribir:
    $faq->get();
    En este caso estamos accediendo al método get del objeto "faq" que es una instancia de la clase Faq. 
    */

    public function __construct(Faq $faq) // El constructor es el primer método que se ejecuta al instanciar un objeto.
    {
        $this->faq = $faq;

        // Debugbar::info($this->faq); // Muestra la instancia del objeto en consola.
        // Debugbar::info("hola"); // Debugbar es una librería que nos permite ver información de la aplicación.
    }
    
    public function index()
    {

        /* 
            En este momento estamos usando el objeto View para crear una vista, a la cual le estamos pasando dos variables
            (faq y faqs). La primera variable tiene como valor los campos de la tabla faqs vacios, y la segunda variable
            tiene como valor todos los registros de la tabla faqs. Para pedir todos los datos hemos escrito: $this->faq->get();
        */

        $view = View::make('admin.pages.faqs.index')
                ->with('faq', $this->faq) // Friendly reminder: "faq" is the name of the model and "faqs" is the name of the table.
                ->with('faqs', $this->faq->where('active', 1)->get()); // ORM (Object Relational Mapping) es una librería que nos
                                                                      // permite acceder a la base de datos desde PHP.
                // Debugbar::info($view); // Muestra la vista en consola.

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function create()
    {
        /*
            En la siguientes líneas estamos creando una variable que se llama view, y que tiene como valor el objeto View.
            El objeto View medienta un método estático está creando la vista 'admin.pages.faqs.create' que es la que se
            mostrará en pantalla. Con 'with' le estamos diciendo que le pase la variable 'faq' y que su valor sea el objeto
            modelo Faq, que como no estamos haciendo ninguna llamada a la base de datos nos devolverá los campos vacíos de la tabla.
            Por último, renderSections() lo que está haciendo es recargar las sections que tiene la vista (en este caso 'form' y 'table')
            con los datos procesados. 
        */

       $view = View::make('admin.pages.faqs.index')
        ->with('faq', $this->faq)
        ->renderSections(); // renderSections() lo que está haciendo es recargar las sections que tiene la vista
                            // (en este caso 'form' y 'table') con los datos procesados.
        Debugbar::info($view['form']);

        /*
            En la siguiente línea estamos devolviendo una respuesta a la petición AJAX, una petición AJAX hará que una parte de la página
            se actualice sin necesidad de recargar toda la página. En este caso, la parte que se actualizará es la parte del formulario. Para
            ello estamos diciendo que la palabra "form" será equivalente a $view['form'], la cual contiene el html del formulario ya actualizado.
        */

        return response()->json([ // Esta línea devuelve el formulario ya actualizado.
            'form' => $view['form']
        ]);
    }

    public function store(FaqRequest $request) // Inyección de dependencias. 
    {            

        $faq = $this->faq->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'description' => request('description'),
                'visible' => 1,
                'active' => 1,
        ]);

        $view = View::make('admin.pages.faqs.index')
        ->with('faqs', $this->faq->where('active', 1)->get()) // width es un método del objeto (o clase) View que rellena la tabla con
        ->with('faq', $faq)                                  //  los datos de la base de datos dónde active sea igual a 1.
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $faq->id,
        ]);
    }

    public function edit(Faq $faq)
    {
        $view = View::make('admin.pages.faqs.index')
        ->with('faq', $faq)
        ->with('faqs', $this->faq->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Faq $faq){
        
    }

    public function destroy(Faq $faq)
    {
        $faq->active = 0;
        $faq->save();

        $view = View::make('admin.pages.faqs.index')
            ->with('faq', $this->faq)
            ->with('faqs', $this->faq->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}