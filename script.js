// Массив для хранения заметок
let notes = [];
// Элементы DOM
const form = document.getElementById('note-form');
const input = document.getElementById('note-input');
const errorDiv = document.getElementById('error-message');
const notesList = document.getElementById('notes-list');
// Функция для перерисовки списка заметок
function renderNotes() {
    // Очищаем контейнер
    notesList.innerHTML = '';
    // Проходим по массиву и создаём элементы
    notes.forEach(note => {
        const li = document.createElement('li');
        li.className = 'note-item';
        li.dataset.id = note.id;
        const span = document.createElement('span');
        span.className = 'note-text';
        span.textContent = note.text;
        const deleteBtn = document.createElement('button');
        deleteBtn.className = 'delete-btn';
        deleteBtn.textContent = 'Убрать';
        deleteBtn.addEventListener('click', () => deleteNote(note.id));
        li.appendChild(span);
        li.appendChild(deleteBtn);
        notesList.appendChild(li);
    });
}
// Функция удаления заметки
function deleteNote(id) {
    // Фильтруем массив, оставляя все заметки, кроме удаляемой
    notes = notes.filter(note => note.id !== id);
    // Перерисовываем список
    renderNotes();
}
// Функция добавления заметки
function addNote(event) {
    event.preventDefault(); // Отменяем отправку формы
    const text = input.value.trim(); // Убираем пробелы
    // Валидация
    if (text === '') {
        errorDiv.textContent = 'Заметка не может быть пустой, бро.';
        return;
    }
    if (text.length < 3) {
        errorDiv.textContent = 'Слишком коротко — минимум 3 символа.';
        return;
    }
    // Если ошибок нет, очищаем сообщение об ошибке
    errorDiv.textContent = '';
    // Создаём новую заметку (id на основе времени)
    const newNote = {
        id: Date.now(),
        text: text
    };
    // Добавляем в массив
    notes.push(newNote);
    // Очищаем поле ввода
    input.value = '';
    // Перерисовываем список
    renderNotes();
}
// Обработчик отправки формы
form.addEventListener('submit', addNote);
// Первоначальная отрисовка (пустой список)
renderNotes();