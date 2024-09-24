import React from 'react';
import { createRoot } from 'react-dom/client';
import "./frontend.scss";

const Quiz = () => {
  return (
    <div className="paying-attention-frontend">
      Hello from React
    </div>
  );
};

const divsToUpdate = document.querySelectorAll(".paying-attention-update-me");

divsToUpdate.forEach((div) => {
  const root = createRoot(div);
  root.render(<Quiz />);
  div.classList.remove("paying-attention-update-me");
});