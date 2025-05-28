import { useEffect, useState } from 'react';
import './App.css';

function App() {
  const [message, setMessage] = useState('');

  useEffect(() => {
    fetch('/api/RECUC')
      .then((res) => res.json())
      .then((data) => setMessage(data.message));
  }, []);

  return (
    <div>
      <h1>Frontend en React de Carlos Morillas Delgado</h1>
      <p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
      <p>respuesta del Backend: {message || 'Espera un poco que el backend no está listo...'}</p>
    </div>
  );
}

export default App;
