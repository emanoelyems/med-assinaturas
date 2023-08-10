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




