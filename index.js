let cdr = new XMLHttpRequest();
cdr.open("GET",'https://dummyjson.com/products');
cdr.onload = function() {
    if (cdr.status === 200) {
        const response = JSON.parse(cdr.responseText);
        const products = response.products;
        const cards = document.getElementById('cards');

        products.forEach(product => {
            const card =document.createElement('div');
            card.className = 'cards';
            card.innerHTML = `
                <img src="${product.thumbnail}" alt="${product.title}">
                <h2>${product.title}</h2>
                <p>${product.description}</p>
                <div class="price">Price: ${product.price}</div>
                <div class="brand">Brand: ${product.brand}</div>
            `;

            cards.appendChild(card);
        });
    } else{
        console.error('Failed to fetch products. Status:',this.status);
    }
};

cdr.onerror = function () {
    console.error('request error..');
};

cdr.send();