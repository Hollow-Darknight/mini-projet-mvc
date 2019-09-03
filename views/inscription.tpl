<div class="row">
    <div class="col-4 offset-4 my-auto bg-light">
        <h1>Inscription</h1>
        {if isset($ok)}
            <p class="text-success">{$ok}</p>
        {elseif isset($notOk)}
            <p class="text-danger">{$notOk}</p>
        {/if}
        <form method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Adresse email :</label>
                <input type="text" class="form-control" name="mail" id="formGroupExampleInput" placeholder="azerty@azerty.xyz" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Mot de Passe :</label>
                <input type="password" class="form-control" name="pass1" id="formGroupExampleInput2" placeholder="Mot de Passe" required>
                {if isset($error)}
                <p class="text-danger">{$error}</p>
                {/if}
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Confirmation de Mot de Passe :</label>
                <input type="password" class="form-control" name="pass2" id="formGroupExampleInput2" placeholder="Confirmation Mot de Passe" required>
                {if isset($error)}
                <p class="text-danger">{$error}</p>
                {/if}
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