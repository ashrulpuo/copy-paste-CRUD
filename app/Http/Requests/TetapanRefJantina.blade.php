<form class="form" method="POST" id="tetapanJantina">
    @csrf
	<input type="text" hidden class="form-control" id="RefJantinaId" name="RefJantinaId"  /> 
	<div class="form-group">
        <label>Kod Jantina</label>
        <input type="text" class="form-control" id="KodJantina" name="KodJantina" placeholder="Contoh" />
    </div> 
	<div class="form-group">
        <label>Penerangan</label>
        <input type="text" class="form-control" id="Penerangan" name="Penerangan" placeholder="Contoh" />
    </div> 
	<div class="form-group row">
        <label class="col-2 col-form-label">Papar</label>
        <div class="col-10">
            <span class="switch">
                <label>
                    <input type="checkbox" id="Papar" checked="checked" name="Papar" />
                    <span></span>
                </label>
            </span>
        </div>
    </div>
</form>
