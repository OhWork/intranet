import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
import Navbar from './Firstpage/Navbar';
import Menumain from './Firstpage/Menumain';

function App() {
  return (
    <div className="App container-fluid">
      <div className="row">
        <Menumain />
        <div className="wp1">
          <div className="row">
            <div className="col-12">
              <Navbar />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
