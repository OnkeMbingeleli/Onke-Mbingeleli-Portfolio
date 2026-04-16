const express = require('express');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 8000;

// Set EJS as the template engine
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname));

// Serve static files from assets directory
app.use('/assets', express.static(path.join(__dirname, 'assets')));

// Serve static CSS and other files
app.use(express.static(__dirname));

// Main route - render the portfolio
app.get('/', (req, res) => {
  res.render('index');
});

// Handle 404s
app.use((req, res) => {
  res.status(404).send('Page not found');
});

// Start server
app.listen(PORT, () => {
  console.log(`🚀 Onke Portfolio running at http://localhost:${PORT}`);
  console.log(`📁 Serving files from: ${__dirname}`);
});