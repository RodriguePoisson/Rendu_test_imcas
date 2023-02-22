const navbarAutocomplete = document.querySelector('#navbar-search-autocomplete');
const navbarData = ['One', 'Two', 'Three', 'Four', 'Five'];

new mdb.Autocomplete(navbarAutocomplete, {
  filter: navbarDataFilter,
});