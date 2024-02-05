function hasClass(el, className)
{
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className)
{
    if (el.classList)
        el.classList.add(className)
    else if (!hasClass(el, className))
        el.className += " " + className;
}

function removeClass(el, className)
{
    if (el.classList)
        el.classList.remove(className)
    else if (hasClass(el, className))
    {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}

function currency(amount){
    return 'Rp ' + amount;
}

var produk = [
   {
    id: 1,
    name: 'Cappucino ',
    price: 35000,
    active: true,
   },
   {
    id: 2,
    name: 'Green Tea Latte ',
    price: 40000,
    active: true,
   },
   {
    id: 3,
    name: 'Fish and Chips ',
    price: 50000,
    active: true,
   },
   {
    id: 4,
    name: 'Tuna Sandwich ',
    price: 45000,
    active: true,
   },
   {
    id: 5,
    name: 'Mineral Water ',
    price: 8000,
    active: true,
   },
   {
    id: 6,
    name: 'French Fries ',
    price: 18000,
    active: true,
   },
];

var total = 0;
var $app = document.querySelector('.app');

function renderTitle(container){
    var $title = document.createElement('h1');
    $title.innerHTML = 'Pesanan';
    container.appendChild($title);
}

function addTotal(produk, total, isAdd){
    if (isAdd) {
        total += produk.price;
    } else {
        total -= produk.price;
    }
    return total;
}

function renderList(container, produk){
    var $orderList = document.createElement('ul');

    produk.forEach(function(produk){
        var $produk = document.createElement('li');
        var $produkPrice = document.createElement('span');

        $produkPrice.innerHTML = currency(produk.price);
        $produk.innerHTML = produk.name;
        $produk.appendChild($produkPrice);

        $orderList.appendChild($produk);

        $produk.addEventListener('click', function(event){
            var isAdd = !hasClass($produk, 'is-active');
            if(isAdd){
                addClass($produk, 'is-active');
            } else {
                removeClass($produk, 'is-active');
            }

            total = addTotal(produk, total, isAdd);

            var $total = document.querySelector('.total span');
            $total.innerHTML = currency(total);
        });
    });
    container.appendChild($orderList);
}

    function renderTotalContainer(container, total){
        var $totalContainer = document.createElement('div');
        addClass($totalContainer, 'total');

        $totalContainer.innerHTML = 'Total : ';

        var $total = document.createElement('span');
        $total.innerHTML = currency(total);
        $totalContainer.appendChild($total);

        container.appendChild($totalContainer);
    }

    renderTitle($app);
    renderList($app, produk);
    renderTotalContainer($app, total);

    var $produk = document.querySelector('li');
    $produk.forEach(function($produk, index){
        if(index < 2){
            $produk.dispatchEvent(new Event('click'));
        }
    });
