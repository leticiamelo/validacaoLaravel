<html>
<head>
    <title>Cadastro de Cliente</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        body {padding: 20px;}
    </style>    

</head>    
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome"> Nome do Cliente</label>
                                <input type="text" id="nome" 
                                        class="form-control {{ $errors->has('nome') ? 'is-invalide' : '' }}" 
                                        name="nome" placeholder="Nome do Cliente">
@if($errors->has('nome'))                               
                                <div class="invalid-feedback">
    {{$errors->first('nome')}}                                        
                                </div>
@endif                                
                            </div>   
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" 
                                        class="form-control {{ $errors->has('idade') ? 'is-invalide' : '' }}" 
                                        name="idade" placeholder="Idade do Cliente">
@if($errors->has('idade'))                               
                                <div class="invalid-feedback">
    {{$errors->first('idade')}}                                        
                                </div>
@endif                                          
                            </div> 
                            <div class="form-group">
                                <label for="endereco">Endereco do Cliente</label>
                                <input type="text" id="endereco" 
                                        class="form-control {{ $errors->has('endereco') ? 'is-invalide' : '' }}" 
                                        name="endereco" placeholder="Endereco do Cliente">
@if($errors->has('endereco'))                               
                                <div class="invalid-feedback">
    {{$errors->first('endereco')}}                                        
                                </div>
@endif                                          
                            </div> 
                            <div class="form-group">
                                    <label for="email">Email do Cliente</label>
                                    <input type="text" id="email" 
                                            class="form-control {{ $errors->has('email') ? 'is-invalide' : '' }}" 
                                            name="email" placeholder="Email do Cliente">
@if($errors->has('email'))                               
                                    <div class="invalid-feedback">
    {{$errors->first('email')}}                                        
                                    </div>
@endif                                              
                            </div> 
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                        </form>    
                    </div> 
@if($errors->any()) 
                    <div class="card-footer">
    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>    
    @endforeach                    
                    </div>                    
@endif
                </div>    
            </div>    
        </div>    
    </main>   
    
    
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>    
</html>    