let card = document.querySelector('.s');
let btns = document.querySelectorAll('.item button');
let span = document.querySelector('#y');

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {
        let item = this.parentElement.children;
        let div = document.createElement('div');
        let img = document.createElement('img');
        let pa = item[0].getAttribute('src');
        img.setAttribute('src', pa);
        
        let h3 = document.createElement('h3');
        let p = document.createElement('p');
        h3.innerText = item[1].innerText;
        p.innerText = item[2].innerText;

        let a = item[2].children[0];
        let b = Number(span.innerText);
        let c = Number(a.innerText);
        span.innerText = b + c;

        let removeBtn = document.createElement('button');
        removeBtn.innerText = 'Remove';
        
        removeBtn.addEventListener('click', function() {
            div.remove();
            span.innerText = Number(span.innerText) - c;
        });

        div.append(img);
        div.append(h3);
        div.append(p);
        div.append(removeBtn);
        card.append(div);

        div.classList.add('item1');
    });
}
