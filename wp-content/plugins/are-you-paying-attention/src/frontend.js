import "./frontend.scss"

const divsToUpdate = document.querySelectorAll(".paying-attention-update-me")

const Quiz = () => {
  return `
    <div class="paying-attention-frontend">
      Hello from Non-React
    </div>
  `;
};

divsToUpdate.forEach(function(div) {
  div.innerHTML = Quiz();
})

