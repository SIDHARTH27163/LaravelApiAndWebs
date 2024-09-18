<!-- resources/views/components/confirm-modal.blade.php -->
@props(['id' => 'confirmModal', 'message' => 'Are you sure?'])

<div id="{{ $id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-sm mx-4 relative">
        <p class="mb-4">{{ $message }}</p>
        <div class="flex justify-end">
            <button type="button" class="btn text-blue-600 mr-2" onclick="closeModal('{{ $id }}')">Cancel</button>
            <form id="confirmForm" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn text-red-700">Confirm</button>
            </form>
        </div>
        <button type="button" class="absolute top-2 right-2" onclick="closeModal('{{ $id }}')">&times;</button>
    </div>
    <div class="fixed inset-0 bg-gray-800 opacity-50" onclick="closeModal('{{ $id }}')"></div>
</div>

<script>
function openModal(modalId, actionUrl) {
    var modal = document.getElementById(modalId);
    var form = modal.querySelector('form');
    form.action = actionUrl;
    modal.classList.remove('hidden');
}

function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
}
</script>
