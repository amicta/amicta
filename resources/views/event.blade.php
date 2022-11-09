@if (session('status'))
    <div class="alert alert-{{ session('status.element') }} alert-has-icon alert-dismissible show fade">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
        {{ session('status.message') }}
    </div>
@endif

@forelse ($data['events'] as $event)
    {{ $event->name }}
    <br>
    <form action="{{ route('event.register') }}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Nama*</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="nim">NIM*</label>
                <input type="text" id="nim" class="form-control" name="nim" placeholder="nim" required>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone*</label>
                <input type="number" id="phone" class="form-control" name="phone" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <label for="program_study">Prodi*</label>
                <input type="text" id="program_study" class="form-control" name="program_study"
                    placeholder="program_study" required>
            </div>
            <input type="hidden" id="event_id" class="form-control" name="event_id" value="{{ $event->id }}">

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check1" name="reference[]" value="1" checked>
                <label class="form-check-label" for="check1">Option 1</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="check2" name="reference[]" value="2">
                <label class="form-check-label" for="check2">Option 2</label>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@empty
    Belum ada event
@endforelse
