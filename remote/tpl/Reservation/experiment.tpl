<div id="experiment" style="">
    <ul>
        <li>
             <label>Izberite eksperiment: &nbsp; <span style="color:#ff0000;font-size:12px;">(obvezno)</span></label>
            <ul>
              {if $ResourceId == 2} 
                <li><input id="radioExperiment" type="radio" {formname key=EXPERIMENT}  value="scope+gen_difficulties" /> Osiloskop in generator signala</li>
                {/if}
              {if $ResourceId == 1}  
                <li><input id="radioExperiment" type="radio" {formname key=EXPERIMENT} value="eElementi" />eElementi</li>
                {/if}
            </ul>
        </li>
    </ul>
</div>