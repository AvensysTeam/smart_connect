@extends('layouts.main')
@section('content')

<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                </ol>
            </nav> -->

            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h1>Advanced configurations and diagnostics</h1>
                </div>
                <div class="ms-panel-body">
                <div class="table-responsive">
                    <table class="table table-hover w-100">
                        <thead>
                            <tr>
                                <th>Ref</th>
                                <th>Name</th>
                                <th>Variable Name</th>
                                <th>Value</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody id="data-table">
                            @foreach ($rows as $key => $value)
                                <tr>
                                    <td>{{  str_pad($loop->iteration, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td id="Nameno{{$loop->iteration}}" ondblclick="handleEditName('{{$loop->iteration}}', '{{$value}}')">{{$value}}</td>
                                    <td>
                                        {{ $key }}
                                    </td>
                                    <td>
                                        {{ $value }}
                                    </td>
                                    <td id="refno{{$loop->iteration}}" ondblclick="handleEditRemark('{{$loop->iteration}}', '{{$key}}')">{{$key}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function handleEditRemark(refno, oldRemark) {
        var element = document.getElementById('refno' + refno)
        while (element.firstChild) {
            element.removeChild(element.lastChild);
        }
        while (element.firstChild) {
            element.removeChild(element.lastChild);
        }
        var newEditableInput = document.createElement('input');
        newEditableInput.type = "text";
        newEditableInput.id = "editinput" + refno;
        newEditableInput.value = oldRemark;
        var newCloseButton = document.createElement('button');
        newCloseButton.type = "button";
        newCloseButton.textContent = "x";
        newCloseButton.onclick = () => handleCloseRemark(refno);
        element.appendChild(newEditableInput);
        element.appendChild(newCloseButton);
    }

    function handleCloseRemark(refno) {
        var str = document.getElementById("editinput" + refno).value;
        var elements = document.getElementById('refno' + refno)
        while (elements.firstChild) {
            elements.removeChild(elements.lastChild);
        }
        elements.innerHTML = str;
    }
    function handleEditName(Nameno, oldName) {
        var element = document.getElementById('Nameno' + Nameno)
        while (element.firstChild) {
            element.removeChild(element.lastChild);
        }
        while (element.firstChild) {
            element.removeChild(element.lastChild);
        }
        var newEditableInput = document.createElement('input');
        newEditableInput.type = "text";
        newEditableInput.id = "editName" + Nameno;
        newEditableInput.value = oldName;
        var newCloseButton = document.createElement('button');
        newCloseButton.type = "button";
        newCloseButton.textContent = " x ";
        newCloseButton.onclick = () => handleCloseName(Nameno);
        element.appendChild(newEditableInput);
        element.appendChild(newCloseButton);
    }

    function handleCloseName(Nameno) {
        var str = document.getElementById("editName" + Nameno).value;
        var elements = document.getElementById('Nameno' + Nameno)
        while (elements.firstChild) {
            elements.removeChild(elements.lastChild);
        }
        elements.innerHTML = str;
    }
</script>

@endsection

