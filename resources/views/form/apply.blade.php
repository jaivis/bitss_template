<div id="v-form">
    <form action="" method="POST">
        <div class="form-group">
            <input type="tel" class="form-control input-lg" placeholder="43603072379*" id="legal_nr" v-model.number="legal_nr" maxlength="11">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Studija.IT, SIA" id="legal_name" v-model="legal_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Vārds Uzvārds*" id="responsible_person" v-model="responsible_person">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control input-lg" placeholder="29907070*"
                   pattern="[0-9]{8}" title="8 ciparu telefona numurs" id="phone" v-model.number="phone" maxlength="8">
        </div>
        <div class="form-group">
            <input type="email" class="form-control input-lg"
                   placeholder="info@studija.it*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" v-model="email">
        </div>
        <div class="form-group">
            <textarea class="form-control input-lg" rows="5" placeholder="PAPILDUS PIEZĪMES VAI JAUTĀJUMI" id="notes"
                      v-model="notes"></textarea>
        </div>
        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" id="offer" v-model.number="offer" {{--true-value="1" false-value="0"--}}>Pieteikties izdevīgu
                piedāvājumu saņemšanai!</label>
        </div>
        <button type="button" :disabled="!isValid" v-on:click="submitForm" class="btn btn-success btn-lg col-xs-12">Pieteikties
        </button>
    </form>

    {{--success applied--}}
    <div id="v-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    <h4 class="modal-title">Veiksmīgi saņemts!</h4>
                </div>
                <div class="modal-body">
                    <p>Tuvākajā laikā Jūs uz savu e-pastu saņemsiet mūsu izveidotu piedāvājumu (kas vis ticamāk jau ir noticis)!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                </div>
            </div>

        </div>
    </div>
</div>