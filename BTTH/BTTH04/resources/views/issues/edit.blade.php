<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
    crossorigin="anonymous">
<title>Sửa Vấn Đề</title>
</head>
<body>

<h1 style="margin: 50px;">Sửa Vấn Đề</h1>

<form action="{{ route('issues.update', $issue->id) }}" method="POST" style="margin: 50px;">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="computer_id" class="form-label">Máy tính</label>
        <select name="computer_id" class="form-control" id="computer_id" required>
            @foreach($computers as $computer)
                <option value="{{ $computer->id }}" {{ $computer->id == $issue->computer_id ? 'selected' : '' }}>
                    {{ $computer->computer_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="reported_by" class="form-label">Người báo cáo</label>
        <input type="text" name="reported_by" class="form-control" id="reported_by" value="{{ $issue->reported_by }}" required>
    </div>

    <div class="mb-3">
        <label for="reported_date" class="form-label">Ngày báo cáo</label>
        <input type="date" name="reported_date" class="form-control" id="reported_date" value="{{ $issue->reported_date }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" id="description" rows="3" required>{{ $issue->description }}</textarea>
    </div>

    <div class="mb-3">
        <label for="urgency" class="form-label">Mức độ ưu tiên</label>
        <select name="urgency" class="form-control" id="urgency" required>
            <option value="Low" {{ $issue->urgency == 'Low' ? 'selected' : '' }}>Thấp</option>
            <option value="Medium" {{ $issue->urgency == 'Medium' ? 'selected' : '' }}>Trung Bình</option>
            <option value="High" {{ $issue->urgency == 'High' ? 'selected' : '' }}>Cao</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Trạng thái</label>
        <select name="status" class="form-control" id="status" required>
            <option value="Open" {{ $issue->status == 'Open' ? 'selected' : '' }}>Mở</option>
            <option value="In Progress" {{ $issue->status == 'In Progress' ? 'selected' : '' }}>Đang xử lý</option>
            <option value="Resolved" {{ $issue->status == 'Resolved' ? 'selected' : '' }}>Đã giải quyết</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</body>
</html>
