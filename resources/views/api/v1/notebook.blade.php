<title>Записная книжка</title>
<form action="{{ route(/api/v1/notebook/)}}" method="POST" name="notebook">
    @csrf
    <label>Введите свой ФИО</label>
    <input type="text" name="name">
    <label>Введите название своей компании</label>
    <input type="text" name="company">
    <label>Введите свой телефон</label>
    <input type="text" name="phone">
    <label>Введите свой email</label>
    <input type="text" name="email">
    <label>Введите дату своего рождения</label>
    <input type="text" name="birthday">
    <label>Выберите свое фото для записи</label>
    <input type="file" name="photo">
</form>

@foreach

@endforeach