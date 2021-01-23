

<form action="getdepartments" method="get">
    <select class="form-control" id="selectUser" name="user_selected" required focus>
    <option value="" disabled selected>Please select department</option>        
    @foreach($departments as $user)
    <option value="{{$user->id}}">{{$user->department_name }}</option>
    @endforeach
  </select>
  </form>