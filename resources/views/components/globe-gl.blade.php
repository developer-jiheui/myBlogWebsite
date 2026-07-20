<section class="travel-section h-150">
    <div class="travel-header">
        <h3 class="travel-title">Countries I've Visited</h3>
        <p class="travel-subtitle">
            A few places that have shaped my perspective and experiences.
        </p>
    </div>

    <div class="travel-globe-card h-120">
        <div id="visited-globe"></div>
        <p class="travel-hint">Click and drag to rotate</p>
    </div>
</section>
<style>
    .travel-section {
        margin-top: 2rem;
        width: 100%;
    }

    .travel-header {
        margin-bottom: 1.5rem;
    }

    .travel-title {
        color: var(--white-2);
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .travel-subtitle {
        color: var(--light-gray);
        font-size: 15px;
        line-height: 1.6;
    }

    .travel-globe-card {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: var(--shadow-2);
    }

    #visited-globe {
        position: absolute;

        width: 100%;

        height: 100%;

        top: 50%;

        left: 50%;

        transform: translate(-50%, -50%);}

    .travel-hint {
        position: absolute;
        bottom: 18px;
        left: 50%;
        transform: translateX(-50%);
        color: rgba(255, 255, 255, 0.35);
        font-size: 14px;
        pointer-events: none;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .travel-title {
            font-size: 26px;
        }

        .travel-globe-card,
        #visited-globe {

        }

        .travel-hint {
            font-size: 13px;
            bottom: 14px;
        }
    }
    </style>
<script src="https://unpkg.com/globe.gl"></script>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const visitedCountries = new Set([
            'KOR', // South Korea
            'CAN', // Canada
            'DEU', // Germany
            'TUR', // Turkey
            'FRA', // France
            'ITA', // Italy
            'ESP', // Spain
            'MAR', // Morocco
            'CHN', // China
            'LKA'  // Sri Lanka
        ]);

        const globeContainer = document.getElementById('visited-globe');
        if (!globeContainer) return;

        const res = await fetch('https://raw.githubusercontent.com/holtzy/D3-graph-gallery/master/DATA/world.geojson');
        const world = await res.json();

        const jejuPoint = [
            {

                lat: 33.4996,

                lng: 126.65,

                size: 0.02,

                color: '#f9c537',

                label: 'Jeju'

            }

        ];


        const globe = Globe()(globeContainer)
            .backgroundColor('rgba(0,0,0,0)')
            .showAtmosphere(false)
            .showGraticules(false)
            .polygonCapColor(feature => {
                const code = feature.properties.iso_a3 || feature.id;
                return visitedCountries.has(code) ? '#f9c537' : '#e8e8e8';
            })
            .polygonSideColor(() => 'rgba(0,0,0,0.08)')
            .polygonStrokeColor(() => 'rgba(90,90,90,0.65)')
            .polygonAltitude(feature => {
                const code = feature.properties.iso_a3 || feature.id;
                return visitedCountries.has(code) ? 0.01 : 0.005;
            })
            .polygonLabel(feature => {
                const name = feature.properties.name || 'Unknown';
                const code = feature.properties.iso_a3 || feature.id || '';
                const visited = visitedCountries.has(code);

                return `
                <div style="
                    padding: 8px 10px;
                    background: rgba(15,15,15,0.92);
                    color: white;
                    border: 1px solid rgba(249,197,55,0.35);
                    border-radius: 10px;
                    font-size: 13px;
                ">
                    <strong>${name}</strong><br>
                </div>
            `;
            })
            .polygonsData(world.features)
            .pointsData(jejuPoint)

            .pointLat('lat')

            .pointLng('lng')

            .pointAltitude('size')

            .pointColor('color')


            .pointLabel('label')
            .polygonsTransitionDuration(300);


        globe.pointOfView({lat: 37.57, lng: 126.98, altitude: 2.2}, 0);
        globe.globeMaterial().color.set('#2B2B2C')

        function sizeGlobe() {
            globe.width(globeContainer.clientWidth);
            globe.height(globeContainer.clientHeight);
        }

        sizeGlobe();
        window.addEventListener('resize', sizeGlobe);
    });
</script>
