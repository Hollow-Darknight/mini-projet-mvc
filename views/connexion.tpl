<div class="row">
    <div class="col-4 offset-4 my-auto bg-light">
        <h1>Connexion</h1>
        {if isset($connected)}
            <p class="text-success">{$connected}</p>
        {elseif isset($connectionError)}
            <p class="text-danger">{$connectionError}</p>
        {/if}
        <form method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Adresse Email :</label>
                <input type="text" class="form-control" name="mail" id="formGroupExampleInput" placeholder="azerty@azerty.xyz">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Mot de Passe :</label>
                <input type="password" class="form-control" name="pass" id="formGroupExampleInput2" placeholder="Mot de Passe">
            </div>
            <div class="row">
                <div class="offset-2 col-4">
                    <button class="btn btn-dark" type="submit">Valider</button>
                </div>
                <div class="col-4">
                    <button class="btn btn-dark" type="reset">Effacer</button>
                </div>
            </div>
        </form>
    </div>
</div>
