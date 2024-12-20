
document.querySelector('.filter-btn').addEventListener('click', () => {
  document.getElementById('filter-popup').style.display = 'flex';
});

document.querySelector('.popup-overlay').addEventListener('click', (e) => {
  if (e.target === document.querySelector('.popup-overlay')) {
      document.getElementById('filter-popup').style.display = 'none';
  }
});


const rangeInputs = document.querySelectorAll('.slider-container input[type="range"]');
const minValue = document.getElementById('min-value');
const maxValue = document.getElementById('max-value');

const updateValues = () => {
  const min = parseInt(rangeInputs[0].value);
  const max = parseInt(rangeInputs[1].value);

  if (min >= max) {
      rangeInputs[0].value = max - 1;
  }
  if (max <= min) {
      rangeInputs[1].value = min + 1;
  }

  minValue.textContent = rangeInputs[0].value;
  maxValue.textContent = rangeInputs[1].value;
};

rangeInputs.forEach(input => {
  input.addEventListener('input', updateValues);
});


const counters = document.querySelectorAll('.counter');
counters.forEach(counter => {
  const incrementBtn = counter.querySelector('button:last-child');
  const decrementBtn = counter.querySelector('button:first-child');
  const countSpan = counter.querySelector('span');

  incrementBtn.addEventListener('click', () => {
      countSpan.textContent = parseInt(countSpan.textContent) + 1;
  });

  decrementBtn.addEventListener('click', () => {
      const currentCount = parseInt(countSpan.textContent);
      if (currentCount > 0) {
          countSpan.textContent = currentCount - 1;
      }
  });
});

const filterPopup = document.getElementById('filter-popup');
const minRangeInput = document.getElementById('min-range');
const maxRangeInput = document.getElementById('max-range');
const counterSpans = document.querySelectorAll('.counter span');
const amenityButtons = document.querySelectorAll('.amenity-buttons button');
const clearFiltersBtn = document.getElementById('clear-filters');
const applyFiltersBtn = document.getElementById('apply-filters');


const defaultValues = {
    minPrice: 2000,
    maxPrice: 8000,
    bedrooms: 0,
    beds: 0,
    bathrooms: 0,
    amenities: new Set()
};


let currentFilters = {
    minPrice: defaultValues.minPrice,
    maxPrice: defaultValues.maxPrice,
    bedrooms: defaultValues.bedrooms,
    beds: defaultValues.beds,
    bathrooms: defaultValues.bathrooms,
    amenities: new Set()
};


function updateCurrentFilters() {
    currentFilters.minPrice = parseInt(minRangeInput.value);
    currentFilters.maxPrice = parseInt(maxRangeInput.value);
    currentFilters.bedrooms = parseInt(counterSpans[0].textContent);
    currentFilters.beds = parseInt(counterSpans[1].textContent);
    currentFilters.bathrooms = parseInt(counterSpans[2].textContent);
}


function haveFiltersChanged() {
    return (
        currentFilters.minPrice !== defaultValues.minPrice ||
        currentFilters.maxPrice !== defaultValues.maxPrice ||
        currentFilters.bedrooms !== defaultValues.bedrooms ||
        currentFilters.beds !== defaultValues.beds ||
        currentFilters.bathrooms !== defaultValues.bathrooms ||
        currentFilters.amenities.size > 0
    );
}


function resetFilters() {
    
    minRangeInput.value = defaultValues.minPrice;
    maxRangeInput.value = defaultValues.maxPrice;
    minValue.textContent = defaultValues.minPrice;
    maxValue.textContent = defaultValues.maxPrice;

   
    counterSpans.forEach(span => {
        span.textContent = '0';
    });

 
    amenityButtons.forEach(button => {
        button.classList.remove('selected');
    });

    
    currentFilters = {
        minPrice: defaultValues.minPrice,
        maxPrice: defaultValues.maxPrice,
        bedrooms: defaultValues.bedrooms,
        beds: defaultValues.beds,
        bathrooms: defaultValues.bathrooms,
        amenities: new Set()
    };


    clearFiltersBtn.disabled = true;
}


function applyFilters() {
    updateCurrentFilters();
    

    console.log('Applying filters:', currentFilters);
    

    filterPopup.style.display = 'none';
    

    filterCards();
}


function filterCards() {
    const cards = document.querySelectorAll('.card');
    
    cards.forEach(card => {
        // for future functions tanginamo
    });
}


clearFiltersBtn.addEventListener('click', resetFilters);
applyFiltersBtn.addEventListener('click', applyFilters);

function updateClearFiltersButton() {
    updateCurrentFilters();
    clearFiltersBtn.disabled = !haveFiltersChanged();
}


minRangeInput.addEventListener('input', updateClearFiltersButton);
maxRangeInput.addEventListener('input', updateClearFiltersButton);
counterSpans.forEach(span => {
    const counter = span.parentElement;
    counter.querySelectorAll('button').forEach(button => {
        button.addEventListener('click', updateClearFiltersButton);
    });
});

amenityButtons.forEach(button => {
  button.addEventListener('click', () => {
      button.classList.toggle('selected');
      if (button.classList.contains('selected')) {

          currentFilters.amenities.add(button.querySelector('img').alt);
      } else {
          currentFilters.amenities.delete(button.querySelector('img').alt);
      }
      updateClearFiltersButton();
  });
});
const style = document.createElement('style');
style.textContent = `
    .amenity-buttons button.selected {
        background-color: #8c52ff;
        border-color: #8c52ff;
    }
    .amenity-buttons button.selected img {
        filter: brightness(0) invert(1);
    }
`;
document.head.appendChild(style);

updateValues();