@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<p>
    <label>Name</label><br>
    <input type="text" name="name" value="{{ old('name', $student->name ?? '') }}">
</p>
<p>
    <label>Email</label><br>
    <input type="text" name="email" value="{{ old('email', $student->email ?? '') }}">
</p>
<p>
    <label>Course</label><br>
    <select name="course_id">
        <option value="">-- Select course --</option>
        @foreach ($courses as $course)
            <option value="{{ $course->id }}"
                {{ old('course_id', $student->course_id ?? '') == $course->id ? 'selected' : '' }}>
                {{ $course->name }}
            </option>
        @endforeach
    </select>
</p>
<button type="submit">Save</button>
<a href="{{ route('students.index') }}">Cancel</a>