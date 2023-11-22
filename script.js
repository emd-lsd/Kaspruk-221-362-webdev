document.addEventListener('DOMContentLoaded', function () {
    // Получаем все элементы с классом 'product-name'
    var productNames = document.querySelectorAll('.product-name');

    // Добавляем обработчик события для каждого элемента
    productNames.forEach(function (productName) {
        productName.addEventListener('click', function () {
            // Получаем ID продукта из data-атрибута
            var productId = this.getAttribute('data-product-id');

            // Переходим на страницу продукта с использованием JavaScript
            window.location.href = 'product.php?id=' + productId;
        });
    });
});
