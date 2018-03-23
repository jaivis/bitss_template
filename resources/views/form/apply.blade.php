<div id="v-form">
    <form method="POST">
        <div class="form-group">
            <input type="tel" class="form-control input-lg" placeholder="{{ __('global.form.placeholders.legal_nr') }}" id="legal_nr" v-model.number="legal_nr" maxlength="11">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="{{ __('global.form.placeholders.legal_name') }}" id="legal_name" v-model="legal_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="{{ __('global.form.placeholders.responsible_person') }}" id="responsible_person" v-model="responsible_person">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control input-lg" placeholder="{{ __('global.form.placeholders.phone.title') }}"
                   pattern="[0-9]{8}" title="{{ __('global.form.placeholders.phone.patterns') }}" id="phone" v-model.number="phone" maxlength="8">
        </div>
        <div class="form-group">
            <input type="email" class="form-control input-lg"
                   placeholder="{{ __('global.form.placeholders.email') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" v-model="email">
        </div>
        <div class="form-group">
            <textarea class="form-control input-lg" rows="5" placeholder="{{ __('global.form.placeholders.notes') }}" id="notes" v-model="notes"></textarea>
        </div>
        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" id="offer" v-model.number="offer">{{ __('global.form.placeholders.offer') }}</label>
        </div>
        <button type="button" :disabled="!isValid" v-on:click="submitForm" class="btn btn-success btn-lg col-xs-12">{{ __('global.buttons.apply') }}</button>
    </form>

    {{--success applied--}}
    <div id="v-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ __('global.modal.apply.title') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ __('global.modal.apply.success') }}</p>
                </div>
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">{{ __('global.buttons.close') }}</button>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
</div>