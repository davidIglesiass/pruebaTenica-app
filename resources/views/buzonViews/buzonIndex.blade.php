 @extends('layouts.base')
 @section('content')

    <form action="/buzon" method="post">

        @csrf

        <div id="form-index">
            <div class="mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Nombre completo"
                    name="name"
                    require
                >
            </div>
            <div class="mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="contacto"
                    name="contact"
                    require
                >
            </div>
            <div class="mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Email"
                    name="email"
                    require
                >
            </div>
            <div class="mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Direccion"
                    name="address"
                    require
                >
            </div>
            <div class="mb-3">
                <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Municipio de residencia"
                    name="reside"
                    require
                >
            </div>
            <div class="mb-3">
                <input 
                    type="text" 
                    id="tip-form"
                    placeholder="Segerencia, queja o reclamo..."
                    class="form-control"
                    name="tip" 
                    require
                >
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <footer>
        <div class="container">
            <p>&copy; test tecnico, aspirante: David Iglesias</p>
        </div>
    </footer>
@endsection