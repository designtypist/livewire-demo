<!-- Date picker Script and Style -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

<div>
    <h1>Title: "{{ $title }}"</h1>
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>

    <div
        x-data
        x-init="
            flatpickr($refs.dateInput, {
            altInput: true,
            altFormat: 'F j, Y',
            dateFormat: 'Y-m-d'
            })
        "
    >
    <input x-ref="dateInput" type="text" placeholder="YYYY-MM-DD" class="w-full" />
    </div>
</div>
