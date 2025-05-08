function App() {
    const [message, setMessage] = useState('');
    useEffect(() => {
      fetch('/api/db')
        .then((res) => res.json())
        .then((data) => setMessage(data.message));
    }, []);
   
    return (
      <div>
        <h1>Frontend en React de Carlos</h1>
        <p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
        <p>Respuesta del Backend: {message || 'Conectando con el backend, espera por favor...'}</p>
      </div>
    );
   }
   