// const content = document.querySelector(".content");
// const inputSearch = document.querySelector("input[type='search']");

// let items = [];

// inputSearch.oninput = () => {
//   content.innerHTML = "";

//   items
//     .filter((item) =>
//       item.toLowerCase().includes(inputSearch.value.toLowerCase())
//     )
//     .forEach((item) => addHTML(item));
// };

// function addHTML(item) {
//   const div = document.createElement("div");
//   div.innerHTML = item;
//   content.append(div);
// }

// fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados/")
//   .then((data) => data.json())
//   .then((nome) => {
//     nome.forEach((user) => {
//       addHTML(user.nome);
//       items.push(user.nome);
//     });
//   });




// const INPUT_BUSCA = document.getElementById('input-busca');
// const TABELA_BEBIDAS = document.getElementById('tabela-bebidas');

// INPUT_BUSCA.addEventListener('keyup', () => {
//     let expressao = INPUT_BUSCA.value.toLowerCase();

//     if (expressao.length === 1) {
//         return;
//     }

//     let linhas = TABELA_BEBIDAS.getElementsByTagName('tr');

//     for (let posicao in linhas) {
//         if (true === isNaN(posicao)) {
//             continue;
//         }

//         let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase();

//         if (true === conteudoDaLinha.includes(expressao)) {
//             linhas[posicao].style.display = '';
//         } else {
//             linhas[posicao].style.display = 'none';
//         }
//     }
// });


//    $(function () {
//                 $("#assunto").autocomplete({
//                     source: 'proc_pesq_msg.php'
//                 });
//             });