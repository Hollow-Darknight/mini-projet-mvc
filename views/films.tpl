<div class="row">
    <div class="col-12 bg-light">
        <h1>Rechercher un film</h1>
        <p>Saisir un mot du titre</p>
        <form class="col-6 my-3" method="post">
            <div class="col-12 input-group">
                <input type="text" class="form-control" placeholder="Rechercher" name="search" aria-label="" aria-describedby="basic-addon1">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>
<div class="row">
    {foreach from=$allFilms key=k item=films}
    <div class="col-12">
        <h2>{$films->getTitre()} ({$films->getAnnee()})</h2>
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{$films->getAffiche()}" alt="Responsive image">
            </div>
            <div class="col-6 my-5">
                <h3>Acteurs :</h3>
                {foreach from=$films->getRoles() key=k item=role}
                <p>
                    {$role->getActeur()->getNom()} {$role->getActeur()->getPrenom()} ({$role->getPersonnage()})
                </p>
                {/foreach}
            </div>
        </div>
        <hr>
    </div>
    {/foreach}
    <div class="offset-4 col-4">
        <button class="btn btn-dark col-3">Previous</button>
        <button class="btn btn-dark offset-1 col-3">Next</button>
    </div>
</div>
