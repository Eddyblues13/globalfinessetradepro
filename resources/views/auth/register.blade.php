<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Capital Pro - Learn to Invest</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="assets/css/styles2.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="signup-container">
        <h1 class="signup-title">Create An Account</h1>
        <form id="registerForm" class="signup-form">
            @csrf
            <input type="hidden" name="referral_code" value="{{ $referral_code ?? '' }}">

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-input" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-input" value="{{ old('first_name') }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-input" value="{{ old('last_name') }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="phone_number" class="form-input" value="{{ old('phone_number') }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Country</label>
                    <select name="country" class="form-select" id="country" required>
                        @foreach($countries as $country)
                        <option value="{{ $country }}" {{ old('country')==$country ? 'selected' : '' }}>
                            {{ $country }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">City</label>
                    <input type="text" name="city" class="form-input" value="{{ old('city') }}" required>
                </div>
            </div>

            <div class="terms-checkbox d-flex justify-content-center">
                <input type="checkbox" name="terms" class="checkbox-input" required>
                <span class="text-primary" style="font-size: 13px;">
                    I Accept All <a href="#" class="terms-link">Terms Of Service</a>
                </span>
            </div>

            <button type="submit" id="submitButton" class="submit-button">
                <span id="buttonText">CREATE MY ACCOUNT</span>
                <span id="loadingSpinner" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"
                    style="display: none;"></span>
            </button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        const countryCurrencyMap = {
              "Abkhazia": "RUB",
    "American Samoa": "USD",
    "Anguilla": "XCD",
    "Aruba": "AWG",
    "Bermuda": "BMD",
    "Bonaire, Sint Eustatius and Saba": "USD",
    "British Indian Ocean Territory": "USD",
    "British Virgin Islands": "USD",
    "Cayman Islands": "KYD",
    "Cook Islands": "NZD",
    "Curaçao": "ANG",
    "Falkland Islands": "FKP",
    "Faroe Islands": "DKK",
    "French Guiana": "EUR",
    "French Polynesia": "XPF",
    "Gibraltar": "GIP",
    "Greenland": "DKK",
    "Guadeloupe": "EUR",
    "Guam": "USD",
    "Guernsey": "GBP",
    "Hong Kong": "HKD",
    "Isle of Man": "GBP",
    "Jersey": "GBP",
    "Kosovo": "EUR",
    "Macau": "MOP",
    "Martinique": "EUR",
    "Mayotte": "EUR",
    "Montserrat": "XCD",
    "New Caledonia": "XPF",
    "Niue": "NZD",
    "Norfolk Island": "AUD",
    "Northern Cyprus": "TRY",
    "Northern Mariana Islands": "USD",
    "Palestine": "ILS",
    "Pitcairn Islands": "NZD",
    "Puerto Rico": "USD",
    "Réunion": "EUR",
    "Saint Barthélemy": "EUR",
    "Saint Helena": "SHP",
    "Saint Martin (French part)": "EUR",
    "Saint Pierre and Miquelon": "EUR",
    "Sint Maarten (Dutch part)": "ANG",
    "Somaliland": "SLS",
    "South Georgia and the South Sandwich Islands": "GBP",
    "Taiwan": "TWD",
    "Tokelau": "NZD",
    "Transnistria": "PRB",
    "Turks and Caicos Islands": "USD",
    "U.S. Virgin Islands": "USD",
    "Wallis and Futuna": "XPF",
    "Western Sahara": "MAD",
             "Afghanistan": "AFN",
    "Andorra": "EUR",
    "Antigua and Barbuda": "XCD",
    "Bahamas": "BSD",
    "Barbados": "BBD",
    "Belize": "BZD",
    "Benin": "XOF",
    "Burkina Faso": "XOF",
    "Burundi": "BIF",
    "Cape Verde": "CVE",
    "Central African Republic": "XAF",
    "Chad": "XAF",
    "Comoros": "KMF",
    "Congo (Brazzaville)": "XAF",
    "Congo (Kinshasa)": "CDF",
    "Djibouti": "DJF",
    "Equatorial Guinea": "XAF",
    "Eritrea": "ERN",
    "Eswatini (Swaziland)": "SZL",
    "Gabon": "XAF",
    "Gambia": "GMD",
    "Grenada": "XCD",
    "Guinea": "GNF",
    "Guinea-Bissau": "XOF",
    "Guyana": "GYD",
    "Haiti": "HTG",
    "Kiribati": "AUD",
    "Liechtenstein": "CHF",
    "Luxembourg": "EUR",
    "Malta": "EUR",
    "Marshall Islands": "USD",
    "Micronesia": "USD",
    "Monaco": "EUR",
    "Nauru": "AUD",
    "Palau": "USD",
    "Papua New Guinea": "PGK",
    "Saint Kitts and Nevis": "XCD",
    "Saint Lucia": "XCD",
    "Saint Vincent and the Grenadines": "XCD",
    "Samoa": "WST",
    "San Marino": "EUR",
    "São Tomé and Príncipe": "STN",
    "Solomon Islands": "SBD",
    "Suriname": "SRD",
    "Timor-Leste (East Timor)": "USD",
    "Tonga": "TOP",
    "Tuvalu": "AUD",
    "Vanuatu": "VUV",
    "Vatican City": "EUR",
    "United States": "USD",
    "United Kingdom": "GBP",
    "Canada": "CAD",
    "Australia": "AUD",
    "European Union": "EUR",
    "Japan": "JPY",
    "China": "CNY",
    "India": "INR",
    "Nigeria": "NGN",
    "South Africa": "ZAR",
    "Brazil": "BRL",
    "Mexico": "MXN",
    "Russia": "RUB",
    "Switzerland": "CHF",
    "Sweden": "SEK",
    "Norway": "NOK",
    "Denmark": "DKK",
    "New Zealand": "NZD",
    "Singapore": "SGD",
    "Malaysia": "MYR",
    "Indonesia": "IDR",
    "Thailand": "THB",
    "Philippines": "PHP",
    "South Korea": "KRW",
    "Pakistan": "PKR",
    "Bangladesh": "BDT",
    "Turkey": "TRY",
    "Saudi Arabia": "SAR",
    "United Arab Emirates": "AED",
    "Qatar": "QAR",
    "Egypt": "EGP",
    "Kenya": "KES",
    "Ghana": "GHS",
    "Argentina": "ARS",
    "Chile": "CLP",
    "Colombia": "COP",
    "Peru": "PEN",
    "Poland": "PLN",
    "Czech Republic": "CZK",
    "Hungary": "HUF",
    "Israel": "ILS",
    "Vietnam": "VND",
    "Sri Lanka": "LKR",
    "Ukraine": "UAH",
    "Romania": "RON",
    "Morocco": "MAD",
    "Iraq": "IQD",
    "Iran": "IRR",
    "Venezuela": "VES",
    "Zimbabwe": "ZWL",
    "Algeria": "DZD",
    "Angola": "AOA",
    "Armenia": "AMD",
    "Azerbaijan": "AZN",
    "Bahrain": "BHD",
    "Belarus": "BYN",
    "Bhutan": "BTN",
    "Bolivia": "BOB",
    "Bosnia and Herzegovina": "BAM",
    "Botswana": "BWP",
    "Brunei": "BND",
    "Bulgaria": "BGN",
    "Cambodia": "KHR",
    "Cameroon": "XAF",
    "Costa Rica": "CRC",
    "Croatia": "EUR",
    "Cuba": "CUP",
    "Dominican Republic": "DOP",
    "Ecuador": "USD",
    "El Salvador": "USD",
    "Ethiopia": "ETB",
    "Fiji": "FJD",
    "Georgia": "GEL",
    "Guatemala": "GTQ",
    "Honduras": "HNL",
    "Iceland": "ISK",
    "Jamaica": "JMD",
    "Jordan": "JOD",
    "Kazakhstan": "KZT",
    "Kuwait": "KWD",
    "Kyrgyzstan": "KGS",
    "Laos": "LAK",
    "Lebanon": "LBP",
    "Lesotho": "LSL",
    "Liberia": "LRD",
    "Lithuania": "EUR",
    "Latvia": "EUR",
    "Luxembourg": "EUR",
    "Malawi": "MWK",
    "Maldives": "MVR",
    "Mali": "XOF",
    "Mauritius": "MUR",
    "Moldova": "MDL",
    "Mongolia": "MNT",
    "Mozambique": "MZN",
    "Myanmar (Burma)": "MMK",
    "Namibia": "NAD",
    "Nepal": "NPR",
    "Nicaragua": "NIO",
    "North Macedonia": "MKD",
    "Oman": "OMR",
    "Panama": "PAB",
    "Paraguay": "PYG",
    "Rwanda": "RWF",
    "Senegal": "XOF",
    "Serbia": "RSD",
    "Seychelles": "SCR",
    "Sierra Leone": "SLL",
    "Slovakia": "EUR",
    "Slovenia": "EUR",
    "Somalia": "SOS",
    "Sudan": "SDG",
    "Syria": "SYP",
    "Tajikistan": "TJS",
    "Tanzania": "TZS",
    "Togo": "XOF",
    "Tunisia": "TND",
    "Turkmenistan": "TMT",
    "Uganda": "UGX",
    "Uruguay": "UYU",
    "Uzbekistan": "UZS",
    "Yemen": "YER",
    "Zambia": "ZMW"
};


        $(document).ready(function () {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right',
                preventDuplicates: true,
            };

            $('#registerForm').submit(async function(e) {
                e.preventDefault();
                
                const button = $('#submitButton');
                const spinner = $('#loadingSpinner');
                const buttonText = $('#buttonText');
                
                button.prop('disabled', true);
                buttonText.hide();
                spinner.show();

                try {
                    const formData = new FormData(this);
                    const country = $('#country').val();
                    formData.append('currency', countryCurrencyMap[country] || 'USD');

                    const response = await fetch('{{ route("register.submit") }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Accept': 'application/json',
                        },
                        body: formData
                    });

                    const data = await response.json();

                    if (!response.ok) throw data;

                    toastr.success(data.message);
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    }
                } catch (error) {
                    if (error.errors) {
                        Object.entries(error.errors).forEach(([field, messages]) => {
                            messages.forEach(message => toastr.error(message));
                        });
                    } else {
                        toastr.error(error.message || 'An error occurred. Please try again.');
                    }
                } finally {
                    button.prop('disabled', false);
                    spinner.hide();
                    buttonText.show();
                }
            });
        });
    </script>
</body>

</html>