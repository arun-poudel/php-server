$(document).ready(function () {
  // Load todos on page load
  loadTodos();

  //   // Handle form submission
  //   $("#todo-form").submit(function (event) {
  //     event.preventDefault();
  //     var todoText = $("#todo-input").val();
  //     addTodo(todoText);
  //   });

  // Handle delete todo
  $("#todo-list").on("click", ".delete", function () {
    var id = $(this).parent().data("id");

    deleteTodo(id);
  });

  // Function to load todos
  function loadTodos() {
    $.ajax({
      url: "/apps/TodoApp/todos.php",
      type: "GET",
      dataType: "json",
      success: function (data) {
        $("#todo-list").empty();

        data.forEach(function (todo) {
          var listItem = $("<li></li>").text(todo.task);

          listItem.append('<button class="delete">X</button>');
          listItem.data("id", todo.id);

          $("#todo-list").append(listItem);
        });
      },
    });
  }

  //   // Function to add todo
  //   function addTodo(task) {
  //     $.ajax({
  //       url: /apps/TodoApp/actions.php,
  //       type: "POST",
  //       data: {
  //         task: task,
  //       },
  //       success: function () {
  //         $("#todo-input").val("");
  //
  //         loadTodos();
  //       },
  //     });
  //   }

  // Function to delete todo
  function deleteTodo(id) {
    $.ajax({
      url: "/apps/TodoApp/actions.php",
      type: "DELETE",
      data: JSON.stringify({ id: id }),
      contentType: "application/json",
      success: function () {
        loadTodos();
      },
      error: function (xhr, status, error) {
        console.error("Error deleting todo:", error);
      },
    });
  }
});
