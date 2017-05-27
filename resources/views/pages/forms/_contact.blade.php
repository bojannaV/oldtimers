<form action="{{ route('pages.store.contact') }}" method="POST" id="contactForm"
    data-parsley-validate=""
    data-parsley-trigger="keyup"
    data-parsley-validation-threshold="1"
>

    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">
                    Ihr name<span class="asterisk">*</span>
                    (<span class="required__field" ">Pflichtfeld</span>)
                </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" value="{{ old('name') }}"
                    autofocus
                    data-parsley-required
                    data-parsley-required-message="The name is required."
                />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">
                    Ihr E-mail<span class="asterisk">*</span>
                    (<span class="required__field">Pflichtfeld</span>)
                </label>
                <input type="text" name="email" id="email" class="form-control" placeholder="example@domain.com" value="{{ old('email') }}"
                    data-parsley-required
                    data-parsley-type="email"
                    data-parsley-required-message="The email is required."
                />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="subject">
            Betreff<span class="asterisk">*</span>
            (<span class="required__field">Pflichtfeld</span>)
        </label>
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" value="{{ old('subject') }}"
            data-parsley-required
            data-parsley-required-message="The subject is required."
        />
    </div>
    <div class="form-group">
        <label for="body">
            Nachricht<span class="asterisk">*</span>
            (<span class="required__field">Pflichtfeld</span>)
        </label>
        <textarea name="body" id="body" class="form-control" rows="6" placeholder="Enter your message"
            data-parsley-required
            data-parsley-required-message="The message is required."
        >{{ old('body') }}</textarea>
    </div>
    <button type="submit" class="btn btn-success pull-right">
        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Absenden
    </button>
</form>