<a class="btn btn-danger btn-sm" href="javascript:void(0)" onclick="deleteData({{ $id }})">
    <i data-feather="trash" class="me-50" ></i>
    <span>Delete</span>
</a>

<form id="delete-form-{{ $id }}" method="POST" action="{{ $route }}" style="display: none">
    @csrf
    @method('DELETE')
</form>