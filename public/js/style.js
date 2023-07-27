
// // function gerarImagem() {
// //   var canvas = document.getElementById("myCanvas");
// //   var context = canvas.getContext("2d");

// //   //Limpar o canvas
// //   context.clearRect(0, 0, canvas.width, canvas.height);

// //   //Desenhar um retângulo
// //   context.fillStyle = "blue";
// //   context.fillStyle(50, 50, 100, 100);

// //   // Obter a URL da imagem do canvas
// //   var dataURL = canvas.toDataURL();

// //   // Mostrar a imagem gerada em um elemento <img>
// //   var imgGerada = document.getElementById("imagemGerada");
// //   imgGerada.src = dataURL;
// //   imgGerada.style.display = "block";
// // } 


// function copiarHTML() {
//   var conteudo = document.getElementById("conteudo").outerHTML; // Obtém o HTML formatado da div "conteudo"
//   var el = document.createElement("textarea"); // Cria um elemento textarea
//   el.value = conteudo; // Define o valor do textarea para o HTML obtido
//   document.body.appendChild(el); // Adiciona o textarea ao final do documento
//   el.select(); // Seleciona todo o conteúdo do textarea
//   document.execCommand("copy"); // Copia o conteúdo selecionado para a área de transferência
//   document.body.removeChild(el); // Remove o textarea, já que não é mais necessário
//   alert("HTML formatado copiado para a área de transferência!");
// }


// //Script JavaScript para a funcionalidade do botão

// function downloadImagem() {
//   // URL da imagem que será baixada
//   var imgGerada = document.getElementById("imagemGerada");
//   var urlImagem = imgGerada.src; // Substitua pelo URL da imagem que deseja baixar

//   // Obter a extensão da imagem (opcional)
//   var extensao = urlImagem.split('.').pop();

//   // Criar uma requisição para obter o conteúdo da imagem
//   var xhr = new XMLHttpRequest();
//   xhr.open('GET', urlImagem, true);
//   xhr.responseType = 'blob';

//   xhr.onload = function () {
//     if (xhr.status === 200) {
//       // Criar um objeto Blob com o conteúdo da imagem
//       var blob = new Blob([xhr.response], { type: 'image/' + extensao });

//       // Criar uma URL temporária para o Blob
//       var urlTemporaria = URL.createObjectURL(blob);

//       // Criar um elemento <a> invisível para fazer o download
//       var linkDownload = document.createElement('a');
//       linkDownload.href = urlTemporaria;
//       linkDownload.download = 'imagem_baixada.' + 'png'; // Nome do arquivo de download
//       linkDownload.style.display = 'none';

//       // Adicionar o link ao documento
//       document.body.appendChild(linkDownload);

//       // Simular o clique no link para fazer o download
//       linkDownload.click();

//       // Remover o link do documento após o download
//       document.body.removeChild(linkDownload);

//       // Liberar a URL temporária
//       URL.revokeObjectURL(urlTemporaria);
//     }
//   };

//   xhr.send();
//}


function gerarImagem() {
  html2canvas(document.getElementById('imagemGerada')).then(function (canvas) {
    // Converter o canvas em uma imagem e realizar o download
    canvas2image.saveAsImage(canvas);
  });
}

function downloadImage() {
  // Selecionar a div de assinatura
  const divAssinatura = document.getElementById('signature');
      
  // Converter a div em um canvas usando html2canvas
  html2canvas(divAssinatura).then(function(canvas) {
  // Obter o URL da imagem a partir do canvas
    const imageUrl = canvas.toDataURL();
    
    // Criar um link para download da imagem
    const link = document.createElement('a');
    link.href = imageUrl;fullname
    link.download = 'assinatura.png';
    link.click();
  });
}



    // document.getElementById('form-ass').addEventListener('submit', function(event) {
    //   event.preventDefault();

    //   // Obter os valores dos campos do formulário
    //   const fullname = document.getElementById('fullname').value;
    //   const email = document.getElementById('email').value;
    //   const company = document.getElementById('company').value;
    //   const department = document.getElementById('department').value;

    //   document.getElementById('fullname').innerHTML = `Nome: ${fullname}`;
    //   document.getElementById('email-info').innerHTML = `E-mail: ${email}`;
    //   document.getElementById('company').innerHTML = `Empresa ${company}`;
    //   document.getElementById('department').innerHTML = `Setor ${department}`;

    //   // Obter a div de destino
    //   const ass = document.getElementById('ass');

    //   // Limpar o conteúdo da div antes de adicionar as novas informações
    //   ass.innerHTML = '';

    //   // Adicionar os elementos criados na div de destino
    //   ass.appendChild(fullnameElement);
    //   ass.appendChild(emailElement);
    //   ass.appendChild(companyElement);
    //   ass.appendChild(departmentElement);

    //   // Exibir a div de destino após a submissão
    //   document.getElementById('ass').style.display = 'block';
    // });
