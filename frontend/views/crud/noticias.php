<h2>Crear noticia</h2>
<div class="container bg-secondary text-light p-4" ng-controller="controladorNuevaNoticia">
    <form id="createNewForm" method="POST" enctype="multipart/form-data">
        <!-- titulo -->
        <div class="form-group">
            <label class="d-inline" for="new_title">Titulo</label>
            <input type="text" class="form-control" name="new_title">
        </div>

        <!-- categorias-->
        <div class="form-group">
            <label class="d-inline" for="category_id">Categoría</label>
            <select class="form-control-sm" name="category_id">
                <option ng-repeat="categoria in categorias" value="{{categoria.category_id}}">{{categoria.category_name}}</option>
            </select>
        </div>

        <!-- estado -->
        <div class="form-group">
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="state_id" value="1">
                <label class="form-check-label" for="public">Público</label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="state_id" value="2">
                <label class="form-check-label" for="private">Privado</label>
            </div>
            <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="state_id" value="3">
                <label class="form-check-label" for="notPublic">No público</label>
            </div>
        </div>

        <!-- cuerpo noticia -->
        <div class="form-group">
            <label class="d-inline" for="new_body">Cuerpo de la noticia</label>
            <textarea class="form-control" name="new_body" rows="7" placeholder="Ingresa el cuerpo de la noticia..."></textarea>
        </div>

        <!-- imagen noticia -->
        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" class="form-control-file" name="image" accept="image/*">
        </div>

        <button class="btn btn-primary mb-1" type="submit">Crear noticia</button>
    </form>
</div>

<div class="my-5" ng-controller="controladorCrudNoticias">
    <hr class="container">
    <h2>Modificar noticias</h2>
    <div class="bg-secondary text-light container p-4 mb-5" ng-repeat="new in news">
    <i class="far fa-trash-alt eliminar" ng-click="eliminarNoticia(new.new_id)" ></i>
        <form method="POST" id="modifyNews" class="noticia-{{new.new_id}}" enctype="multipart/form-data">
            <!-- id noticia (oculto) -->
            <div class="form-group">
                <input type="hidden" class="form-control idNoticia-{{new.new_id}}" name="new_id" value="{{new.new_id}}">
            </div>
            <!-- titulo -->
            <div class="form-group">
                <label class="d-inline" for="new_title">Titulo</label>
                <input type="text" class="form-control" name="new_title" value="{{new.new_title}}">
            </div>

            <!-- categorias-->
            <div class="form-group">
                <label class="d-inline" for="category_id">Categoría</label>
                <select class="form-control-sm" name="category_id">
                        <option ng-repeat="categoria in categorias" value="{{categoria.category_id}}">{{categoria.category_name}}</option>
                </select>
            </div>

            <!-- estado -->
            <div class="form-group">
                <div class="form-check-inline">
                    <input class="form-check-input hola1" required type="radio" name="state_id" value="1">
                    <label class="form-check-label" for="public">Público</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input hola2" required type="radio" name="state_id"  value="2">
                    <label class="form-check-label" for="private">Privado</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input hola3" required type="radio" name="state_id" value="3">
                    <label class="form-check-label" for="notPublic">No público</label>
                </div>
            </div>

            <!-- cuerpo noticia -->
            <div class="form-group">
                <label class="d-inline" for="new_body">Cuerpo de la noticia</label>
                <textarea class="form-control" name="new_body" rows="7" placeholder="Ingresa el cuerpo de la noticia..." >{{new.new_body}}</textarea>
            </div>
            <!-- imagen noticia -->
            <div class="form-group">
                <label for="image">Imagen</label>
                <input type="file" class="form-control-file" name="image" accept="image/*">
            </div>
            <button type="submit" ng-click="actualizarNoticia(new.new_id)" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>