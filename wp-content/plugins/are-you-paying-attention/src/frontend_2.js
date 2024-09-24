import "./frontend.scss"

const divsToUpdate = document.querySelectorAll(".paying-attention-update-me")

const Quiz = (props) => {
  return `
  <div class="paying-attention-frontend">
    <p>${props.question}</p>
    <ul>
      ${props.answers.map((answer) => '<li>' + answer + '</li>')}
    </ul>
  </div>
  `;
};

divsToUpdate.forEach(function(div) {
  const data = JSON.parse(div.querySelector("pre").innerHTML)
  div.innerHTML = Quiz({...data}).replaceAll('>,<', '>\n<');  // DEBUG: ',' 제거
})
