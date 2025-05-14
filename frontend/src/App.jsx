import { useEffect, useState } from 'react';

function App() {
  const [message, setMessage] = useState('');

  useEffect(() => {
    fetch(import.meta.env.VITE_API_URL)
      .then(res => res.json())
      .then(data => setMessage(data.message))
      .catch(() => setMessage('Error al conectar con la API'));
  }, []);

  return (
    <div style={{ padding: 20 }}>
      <h1>Frontend en React de Carlos Morillas Delgado</h1>
      <p>Esta aplicación se conecta al backend de Symfony y muestra un mensaje desde la base de datos:</p>
      <strong>{message || 'Recuperando datos...'}</strong>
    </div>
  );
}

export default App;
