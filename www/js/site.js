document.body.classList.add('js');
var toggle    = document.querySelector('#toggle-navigation');
var menu      = document.querySelector('#menu');
var menuItems = document.querySelectorAll('#menu li a');

toggle.addEventListener('click', function(){
  if (menu.classList.contains('is-active')) {
    this.setAttribute('aria-expanded', 'false');
    menu.classList.remove('is-active');
  } else {
    menu.classList.add('is-active'); 
    this.setAttribute('aria-expanded', 'true');
  }
});




    //shcool search
    let render = document.getElementById("schoolBtn").addEventListener('click', renderSchools);
    let schoolSearch = document.getElementById('schoolSearch').value;

    async function getSchools(schoolSearch) {
        let url = `https://open.neis.go.kr/hub/schoolInfo?KEY=229bf2a993084683bdb67b50e475b50c&Type=json&pIndex=1&pSize=100&SCHUL_NM=${schoolSearch}`;
        try {
        let res = await fetch(url);
        let data = await res.json()
        return await data.schoolInfo[1].row;
        } catch (error) {
        console.log(error);
        }
    }
    
    

    async function renderSchools() {
        let schoolSearch = document.querySelector('input[name="schoolSearch"]').value;
        try {
            let schools = await getSchools(schoolSearch);
            let html = '';
            schools.forEach(school => {
                
                let htmlSegment = `
                    <div class="mb-3">
                        <button class="btn btn-success w-100" id="selectBtn school.index" onclick="selectSchool('${school.SCHUL_NM}', '${school.SD_SCHUL_CODE}')">
                            3. ${school.SCHUL_NM} ${school.SD_SCHUL_CODE} ${school.ATPT_OFCDC_SC_NM}
                        </button>

                    </div>`;

            html += htmlSegment;
            });

            let container = document.querySelector('#schoolsearch12');
            container.innerHTML = html;
        } catch (error) {
            console.log(error);
        }
        
    };

    async function selectSchool(schoolname, schoolcode) {
          document.getElementById("SCHUL_NM").value = schoolname;
          document.getElementById("SD_SCHUL_CODE").value = schoolcode;
    }

            //checkbox
    document.getElementById("submit").disabled = true;
    function getCheck() {
      const selectedElements = document.querySelectorAll('input[class=form-check-input]:checked');
      
  
    
      if(selectedElements.length == 0) {
        document.getElementById("submit").disabled = true;
      } else {
        document.getElementById("submit").disabled = false;
        selectedElements.length ===1;
      }
    }