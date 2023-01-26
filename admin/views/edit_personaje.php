<?PHP 
$id = $_GET['id'] ?? FALSE;
$personaje = (new Personajes()) -> get_x_id($id);

//echo "<pre>";
//print_r($personaje);
//echo"</pre>";
//?>
<div class="container">
<div class="row my-5 justify-content-center">
<div class="card col-sm-10 p-5 sombra-form m-5">
    <div class="col">
        <h1 class="text-center mb-5">Editar datos de "<?= $personaje -> getPersonaje(); ?>"</h1>
        <div class="row mb-5 d-flex align-items-center">
        </div>
    </div>
    <form class="row g-3 sombra-form" action="actions/edit_personaje_acc.php?id=<?= $personaje->getPersonaje_id(); ?>" method="POST" enctype="multipart/form-data">
        <div class="col-md-6 mb-3">
            <label for="nombre" class="form-label mb-2 fw-bold">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $personaje -> getPersonaje(); ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="alt" class="form-label mb-2 fw-bold">Breve descripcion de la Imagen (alt)</label>
            <input type="text" class="form-control" id="alt" name="alt" value="<?= $personaje -> getAlt(); ?>" required>
        </div>

        <div class="col-md-2 mb-3">
			<label for="imagen" class="form-label mb-2 fw-bold">Imágen actual</label>
			<img src="../img/personajes/<?= $personaje->getImg(); ?>" alt="<?= $personaje->getAlt(); ?>" class="img-fluid rounded shadow-sm d-block">
			<input class="form-control" type="hidden" id="imagen_og" name="imagen_og" value="<?= $personaje->getImg(); ?>">
		</div>

        <div class="col-md-4 mb-3">
			<label for="imagen" class="form-label mb-2 fw-bold">Reemplazar Imagen</label>
			<input class="form-control" type="file" id="imagen" name="imagen">
		</div>

        <div class="col-md-12 mb-3">
            <label for="descripcion" class="form-label mb-2 fw-bold">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion"><?= $personaje->getDescripcion(); ?>
            </textarea>
        </div>

        <div class="boton d-flex justify-content-center mb-2">
            <button class="btn botonColorido" type="submit">Editar Personaje</button>
        </div>

    </form>
</div>
</div>
</div>