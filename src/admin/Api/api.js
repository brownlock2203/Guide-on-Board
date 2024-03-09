import axios from "axios";

const api = {

    // Axios for taxonomy

    createCategory: async (categorie) => {

        const add_categorie = await axios.post(gob_rest_url+'/gob-categorie', categorie);
        
        return add_categorie.data;
    },

    getCategories: async () => {
        
        const categories = await axios.get(gob_rest_url+'/gob-categorie');
        
        return categories.data;
    
    },

    deleteCategory: async (categorie_id, categorie) => {

        const delete_categorie = await axios.delete(gob_rest_url+'/gob-categorie/'+categorie_id, categorie);

        return delete_categorie.data;

    },

    updateCategory: async (categorie_id, updatedData) => {

        const update_categorie = await axios.put(gob_rest_url+'/gob-categorie/'+categorie_id, updatedData);

        return update_categorie.data;

    },

    getCategoryById: async(categorie_id) => {

        const get_categorie = await axios.get(gob_rest_url+'/gob-categorie/'+categorie_id);

        return get_categorie.data;

    },
    

    // Axios for guide post_type

    getGuides: async (categorie_id) => {
        
        const allGuides = await axios.get(`${gob_rest_url}/gob-categorie/${categorie_id}/gob-guides`);
        
        return allGuides.data;
    
    },

    createGuide: async (categorie_id, guide_id) => {

        const add_guide = await axios.post(gob_rest_url+'/gob-categorie/'+categorie_id+'/gob-guides', guide_id);
        
        return add_guide.data;
    },

    deleteGuide: async (categorie_id, guide_id) => {

        const delete_guide = await axios.delete(gob_rest_url+'/gob-categorie/'+categorie_id+'/gob-guides/'+guide_id);

        return delete_guide.data;

    },

    updateGuide: async (categorie_id, guide_id, updatedData) => {

        const update_guide = await axios.put(gob_rest_url+'/gob-categorie/'+categorie_id+'/gob-guides/'+guide_id, updatedData);

        return update_guide.data;

    },

    getGuideById: async(categorie_id, guide_id) => {

        const get_guide = await axios.get(`${gob_rest_url}/gob-categorie/${categorie_id}/gob-guides/${guide_id}`);

        return get_guide.data;

    },

        // Axios for sections

        getSections: async (categorie_id, guide_id) => {
        
            const allSections = await axios.get(`${gob_rest_url}/gob-categorie/${categorie_id}/gob-guides/${guide_id}/gob-sections`);
            
            return allSections.data;
        
        },
    
        createSection: async (categorie_id, guide_id, section) => {
    
            const add_section = await axios.post(gob_rest_url+'/gob-categorie/'+categorie_id+'/gob-guides/'+guide_id+'/gob-sections', section);
            
            return add_section.data;
        },
    
        deleteSection: async (categorie_id, guide_id, section_id) => {
    
            const delete_section = await axios.delete(gob_rest_url+'/gob-categorie/'+categorie_id+'/gob-guides/'+guide_id+'/gob-sections/'+section_id);
    
            return delete_section.data;
    
        },
    
        updateSection: async (categorie_id, guide_id, section_id, updatedData) => {
    
            const update_section = await axios.put(gob_rest_url+'/gob-categorie/'+categorie_id+'/gob-guides/'+guide_id+'/gob-sections/'+section_id, updatedData);
    
            return update_section.data;
    
        },
    
        getSectionById: async(categorie_id, guide_id, section_id) => {
    
            const get_section = await axios.get(`${gob_rest_url}/gob-categorie/${categorie_id}/gob-guides/${guide_id}/gob-sections/${section_id}`);
    
            return get_section.data;
    
        },
    
}

export default api;